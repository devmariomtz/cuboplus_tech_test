<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tech_test extends Controller
{
    public function getBalance(Request $request)
    {
        $address = $request->input('address');
        $url = env('MEMPOOL_API') . $address;
        $response = json_decode(file_get_contents($url));
        // calculate the on-chain balance
        $onchainBalance = $response->chain_stats->funded_txo_sum - $response->chain_stats->spent_txo_sum;
        // calculate the mempool balance
        $mempoolBalance = $response->mempool_stats->funded_txo_sum - $response->mempool_stats->spent_txo_sum;

        $seven_days_balance = $this->getBalanceVariation($address, 7);
        $thirty_days_balance = $this->getBalanceVariation($address, 30);
        return response()->json([
            'onchain_balance' => $onchainBalance,
            'mempool_balance' => $mempoolBalance,
            'days7_balance' => $seven_days_balance,
            'days30_balance' => $thirty_days_balance
        ]);
    }

    private function getBalanceVariation($address, $days)
    {
        // TimeStamp actual in UNIX format
        $now = time();
        $pastTime = $now - ($days * 24 * 60 * 60);

        $url = env('MEMPOOL_API') . $address . '/txs';
        $response = file_get_contents($url);
        $transactions = json_decode($response, true);

        $totalVariation = 0;
        // Iterar sobre las transacciones
        foreach ($transactions as $tx) {
            if ($tx['status']['confirmed'] === false) {
                continue;
            }
            $txTime = $tx['status']['block_time'];
            if ($txTime >= $pastTime) {
                $txValue = array_reduce($tx['vout'], function ($sum, $output) use ($address) {
                    return $output['scriptpubkey_address'] === $address ? $sum + $output['value'] : $sum;
                }, 0);

                $totalVariation += $txValue;
            }
        }

        return $totalVariation;
    }
}
