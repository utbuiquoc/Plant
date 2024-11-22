<div class="p-5">
    {{-- The whole world belongs to you. --}}

    <div class="flex flex-col">
        <button id='gen' type="button" class="mb-3 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none">
            Click me!
        </button>
    
        <div id="loading" class="hidden mb-3 animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full dark:text-blue-500" role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>

        <div id="log" class="flex flex-col">

        </div>
    </div>
</div>

<script>
    const loading = document.getElementById('loading');
    const log = document.getElementById('log');
    let running = false;

    let fakeData;
    
    document.getElementById('gen').addEventListener('click', function() {
        if (running) {
            loading.classList.remove('hidden');
            fakeData = setInterval(() => {
                axios.get('/gen-data')
                    .then(res => {
                        console.log(res);
                        // log.insertAdjacentHTML('beforeend', `<p>${res.data}</p>`);
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }, 1000)
        } else {
            clearInterval(fakeData);
            loading.classList.add('hidden');
        }
        
        running = !running;
    });
</script>