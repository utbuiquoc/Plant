<div class="h-full p-5">
    {{-- The whole world belongs to you. --}}
    <div class="h-full p-5 flex flex-col justify-between bg-white rounded-xl border-solid border-2">
        <ul id="chat" class="flex flex-col overflow-auto overflow-x-hidden mt-2">
        </ul>
    
        <form id="mess" class="mt-2 flex">
            <input type="text" class="w-full bg-white rounded-xl p-2 border-solid border border-grey-500" placeholder="Đặt câu hỏi">
        </form>
    </div>
</div>

<script type="module">
    var chatEl = document.querySelector('#chat');

    const first_question = `Chất lượng không khí là {{ $AirQuality }} ppm. Nhiệt độ không khí là {{ $Airtemp }} độ C. Độ ẩm không khí là {{ $Humidity }}%. Độ pH của đất là {{ $pH }}. Nồng độ Nitrogen của đất là {{ $Nitrogen }} ppm. Nồng độ Phosphorus của đất là {{ $Phosphorus }} ppm. Nồng độ Potassium (Kali) của đất là {{ $Potassium }} ppm. Độ ẩm đất là {{ $SoilMoisture }}%. Nhiệt độ đất là {{ $SoilTemperature }} độ C. Độ dẫn điện là  {{ $Conductivity }} μS/cm. Hãy phân tích và đánh giá chất lượng đất trồng cây thông ba lá theo các thông tin được cung cấp trên.`;

    console.log(first_question);
    
    axios.post('http://103.20.97.12:5000/rag-query', {
            question: first_question,
            withCredentials: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
            },
        })
        .then(res => {
            let response = res.data;
            console.log(res);
            chatEl.insertAdjacentHTML('beforeend', `
                <li class="flex flex-col mt-2">
                    <div class="flex flex-col mt-2 bg-white border border-gray-200 rounded-2xl p-4">
                        <span class="whitespace-pre-line">${response}</span>
                    </div>
                </li>
            `);
            
            chatEl.scrollTop = chatEl.scrollHeight;
        })
        .catch(error => {
            console.log(error);
        });
        
    

    // Chat 
    document.querySelector('#mess').addEventListener('submit', function(e) {
        e.preventDefault();
        let message = e.target.querySelector('input').value;
        e.target.querySelector('input').value = '';
        if (message.trim() === '') return;

        console.log(message);

        chatEl.innerHTML += `
            <li class="max-w-lg ms-auto flex justify-end mt-2">
                <div class="grow text-end space-y-3">
                <!-- Card -->
                <div class="inline-block bg-blue-600 rounded-2xl p-4 shadow-sm">
                    <p class="text-sm text-white">
                        ${message}
                    </p>
                </div>
                <!-- End Card -->
                </div>
            </li>
        `;
        
        chatEl.scrollTop = chatEl.scrollHeight;

        axios.post('http://103.20.97.12:5000/rag-query', {
            question: message,
            withCredentials: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
            },
        })
        .then(res => {
            let response = res.data;
            console.log(res);
            chatEl.insertAdjacentHTML('beforeend', `
                <li class="flex flex-col mt-2">
                    <div class="flex flex-col mt-2 bg-white border border-gray-200 rounded-2xl p-4">
                        <span class="whitespace-pre-line">${response}</span>
                    </div>
                </li>
            `);
            
            chatEl.scrollTop = chatEl.scrollHeight;
        })
        .catch(error => {
            console.log(error);
        });
    });
</script>