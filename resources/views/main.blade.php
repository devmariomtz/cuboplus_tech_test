<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - ₿TC BALANCE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-violet-400 to-indigo-500">
    <header>
        <h1 class="font-sans text-6xl text-center pt-4"> ₿TC BALANCE</h1>
    </header>
    <main class="p-4 h-[70vh]">
        <div id="toast-success"
            class="hidden absolute items-center max-w-xs p-4 text-black shadow
            w-[300px] top-4 right-4
            bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-white bg-green-500 rounded-lg ">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 13l4 4L19 7" />
                </svg>
                <span class="sr-only">Fire icon</span>
            </div>
            <div class="ms-3 text-sm font-normal" id="success-toast-text"></div>

        </div>
        <div id="toast-error"
            class="hidden absolute items-center max-w-xs p-4 text-black shadow
            w-[300px] top-4 right-4
            bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-white bg-red-500 rounded-lg ">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span class="sr-only">Fire icon</span>
            </div>
            <div class="ms-3 text-sm font-normal" id="error-toast-text"></div>
        </div>
        <form class="flex justify-center items-center gap-4 ">
            <button type="button" class="bg-purple-500 text-white p-2 rounded-lg" id="default">Add Default
                Address</button>
            <input type="text" name="btc_address" id="btc_address"
                class="border-2 border-gray-300 p-2 rounded-lg w-[30%]" placeholder="Enter BTC Address" maxlength="36">
            <button type="reset" id="reset" class="bg-gray-500 text-white p-2 rounded-lg flex gap-2 ">
                <svg fill="#ffffff" width="20px" height="20px" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21,15V2a1,1,0,0,0-1-1H12a1,1,0,0,0-.929.629L10,4.308,8.929,1.629A1,1,0,0,0,8,1H4A1,1,0,0,0,3,2V15a2,2,0,0,0,2,2H9v3a3,3,0,0,0,3,3,3.054,3.054,0,0,0,3-3.107V17h4A2,2,0,0,0,21,15ZM5,3H7.323L9.071,7.371a1,1,0,0,0,1.858,0L12.677,3H19v8H5Zm9,12a1,1,0,0,0-1,1v3.893a1.083,1.083,0,0,1-.825,1.092A1,1,0,0,1,11,20V16a1,1,0,0,0-1-1H5V13H19v2Z" />
                </svg> Clear
            </button>
            <button id="submit" class="bg-blue-500 text-white p-2 rounded-lg flex gap-2">
                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.1"
                        d="M13.8179 4.54512L13.6275 4.27845C12.8298 3.16176 11.1702 3.16176 10.3725 4.27845L10.1821 4.54512C9.76092 5.13471 9.05384 5.45043 8.33373 5.37041L7.48471 5.27608C6.21088 5.13454 5.13454 6.21088 5.27608 7.48471L5.37041 8.33373C5.45043 9.05384 5.13471 9.76092 4.54512 10.1821L4.27845 10.3725C3.16176 11.1702 3.16176 12.8298 4.27845 13.6275L4.54512 13.8179C5.13471 14.2391 5.45043 14.9462 5.37041 15.6663L5.27608 16.5153C5.13454 17.7891 6.21088 18.8655 7.48471 18.7239L8.33373 18.6296C9.05384 18.5496 9.76092 18.8653 10.1821 19.4549L10.3725 19.7215C11.1702 20.8382 12.8298 20.8382 13.6275 19.7215L13.8179 19.4549C14.2391 18.8653 14.9462 18.5496 15.6663 18.6296L16.5153 18.7239C17.7891 18.8655 18.8655 17.7891 18.7239 16.5153L18.6296 15.6663C18.5496 14.9462 18.8653 14.2391 19.4549 13.8179L19.7215 13.6275C20.8382 12.8298 20.8382 11.1702 19.7215 10.3725L19.4549 10.1821C18.8653 9.76092 18.5496 9.05384 18.6296 8.33373L18.7239 7.48471C18.8655 6.21088 17.7891 5.13454 16.5153 5.27608L15.6663 5.37041C14.9462 5.45043 14.2391 5.13471 13.8179 4.54512Z"
                        fill="#323232" />
                    <path
                        d="M13.8179 4.54512L13.6275 4.27845C12.8298 3.16176 11.1702 3.16176 10.3725 4.27845L10.1821 4.54512C9.76092 5.13471 9.05384 5.45043 8.33373 5.37041L7.48471 5.27608C6.21088 5.13454 5.13454 6.21088 5.27608 7.48471L5.37041 8.33373C5.45043 9.05384 5.13471 9.76092 4.54512 10.1821L4.27845 10.3725C3.16176 11.1702 3.16176 12.8298 4.27845 13.6275L4.54512 13.8179C5.13471 14.2391 5.45043 14.9462 5.37041 15.6663L5.27608 16.5153C5.13454 17.7891 6.21088 18.8655 7.48471 18.7239L8.33373 18.6296C9.05384 18.5496 9.76092 18.8653 10.1821 19.4549L10.3725 19.7215C11.1702 20.8382 12.8298 20.8382 13.6275 19.7215L13.8179 19.4549C14.2391 18.8653 14.9462 18.5496 15.6663 18.6296L16.5153 18.7239C17.7891 18.8655 18.8655 17.7891 18.7239 16.5153L18.6296 15.6663C18.5496 14.9462 18.8653 14.2391 19.4549 13.8179L19.7215 13.6275C20.8382 12.8298 20.8382 11.1702 19.7215 10.3725L19.4549 10.1821C18.8653 9.76092 18.5496 9.05384 18.6296 8.33373L18.7239 7.48471C18.8655 6.21088 17.7891 5.13454 16.5153 5.27608L15.6663 5.37041C14.9462 5.45043 14.2391 5.13471 13.8179 4.54512Z"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9 12L10.8189 13.8189V13.8189C10.9189 13.9189 11.0811 13.9189 11.1811 13.8189V13.8189L15 10"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Check Balance
            </button>
        </form>

        </div>

        <div id="loader" class="hidden" class="flex flex-col justify-center items-center gap-4 mt-4">
            <div class="flex justify-center items-center gap-4 mt-4">
                <div class="bg-gray-200 p-4 rounded-lg w-[30%]">
                    <h2 class="text-center">On-chain Balance.</h2>
                    <div class="flex justify-center items-center gap-4 mt-4">
                        <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-gray-900"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-4">
                <div class="bg-gray-200 p-4 rounded-lg w-[30%]">
                    <h2 class="text-center">Mempool Balance.</h2>
                    <div class="flex justify-center items-center gap-4 mt-4">
                        <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-gray-900"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-4">
                <div class="bg-gray-200 p-4 rounded-lg w-[30%]">
                    <h2 class="text-center">Balance variation in a period of 30 days.</h2>
                    <div class="flex justify-center items-center gap-4 mt-4">
                        <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-gray-900"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-4">
                <div class="bg-gray-200 p-4 rounded-lg w-[30%]">
                    <h2 class="text-center">Balance variation in a period of 7 days.</h2>
                    <div class="flex justify-center items-center gap-4 mt-4">
                        <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-gray-900"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="result" class="hidden">
            <div class="flex justify-center items-center gap-4 mt-4">
                <div class="bg-gray-200 p-4 rounded-lg w-[30%]">
                    <h2 class="text-center">On-chain Balance.</h2>
                    <p class="text-center" id="onchain-balance">0.00000000 BTC</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-4">
                <div class="bg-gray-200 p-4 rounded-lg w-[30%]">
                    <h2 class="text-center">Mempool Balance.</h2>
                    <p class="text-center" id="mempool-balance">0.00000000 BTC</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-4">
                <div class="bg-gray-200 p-4 rounded-lg w-[30%]">
                    <h2 class="text-center">Balance variation in a period of 30 days.</h2>
                    <p class="text-center" id="30days-balance">0.00000000 BTC</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-4 mt-4">
                <div class="bg-gray-200 p-4 rounded-lg w-[30%]">
                    <h2 class="text-center">Balance variation in a period of 7 days.</h2>
                    <p class="text-center" id="7days-balance">0.00000000 BTC</p>
                </div>
            </div>
        </div>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const submit = document.getElementById('submit');
        const toastSuccess = document.getElementById('toast-success');
        const errorToastText = document.getElementById('error-toast-text');
        const successToastText = document.getElementById('success-toast-text');
        const toastError = document.getElementById('toast-error');
        const btc_address = document.getElementById('btc_address');
        const defaultAddress = document.getElementById('default');
        const result = document.getElementById('result');
        const reset = document.getElementById('reset');
        const loader = document.getElementById('loader');
        let isLoading = false;
        submit.addEventListener('click', async (e) => {
            if (!result.classList.contains('hidden')) {
                result.classList.add('hidden');
            }
            loader.classList.remove('hidden');
            isLoading = true;
            e.preventDefault();
            const address = btc_address.value;
            if (address === '') {
                loader.classList.add('hidden');
                // show error toast
                toastError.classList.remove('hidden');
                errorToastText.innerText = 'Please enter a valid address';
                toastError.classList.add('flex');
                // desaparecer toast
                setTimeout(() => {
                    toastError.classList.remove('flex');
                    toastError.classList.add('hidden');
                }, 1000);

                return;
            }
            // user axios to make a request to the backend
            try {
                const response = await axios.post('api/btc-balance', {
                    address
                });
                if (response.status === 200) {
                    // show success toast
                    toastSuccess.classList.remove('hidden');
                    successToastText.innerText = "Balance checked successfully";
                    toastSuccess.classList.add('flex');
                    // desaparecer toast
                    setTimeout(() => {
                        toastSuccess.classList.remove('flex');
                        toastSuccess.classList.add('hidden');
                    }, 1000);
                    // show the result
                    result.classList.remove('hidden');
                    // update the balance
                    const onchainBalance = document.getElementById('onchain-balance');
                    const mempoolBalance = document.getElementById('mempool-balance');
                    const days30Balance = document.getElementById('30days-balance');
                    const days7Balance = document.getElementById('7days-balance');
                    onchainBalance.innerText = response.data.onchain_balance;
                    mempoolBalance.innerText = response.data.mempool_balance;
                    days30Balance.innerText = response.data.days30_balance;
                    days7Balance.innerText = response.data.days7_balance;
                    isLoading = false;
                    loader.classList.add('hidden');
                }
            } catch (e) {
                toastError.classList.remove('hidden');
                errorToastText.innerText = "An error occurred. Please try again later";
                toastError.classList.add('flex');
                // desaparecer toast
                setTimeout(() => {
                    toastError.classList.remove('flex');
                    toastError.classList.add('hidden');
                }, 1000);

                loader.classList.add('hidden');
                isLoading = false;
            }
        });
        defaultAddress.addEventListener('click', async (e) => {
            e.preventDefault();
            btc_address.value = '32ixEdVJWo3kmvJGMTZq5jAQVZZeuwnqzo';
        });
        btc_address.addEventListener('input', (e) => {
            if (!result.classList.contains('hidden') && !isLoading) {
                result.classList.add('hidden');
            }
        });

        reset.addEventListener('click', (e) => {
            e.preventDefault();
            if (!result.classList.contains('hidden') && !isLoading) {
                result.classList.add('hidden');
                btc_address.value = '';

            }
            if (!isLoading) {
                btc_address.value = '';
            }

        });
    </script>
</body>

</html>
