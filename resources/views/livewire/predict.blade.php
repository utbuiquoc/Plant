<div class="grid grid-cols-2 gap-3">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="col-span-1 bg-white rounded-xl p-2 border-solid border border-grey-500 flex justify-center">
        <span id="health_tree_icon" class="h-7 flex text-emerald-400">@svg('rpg-pine-tree')</span>
        <p id="health_tree" class="ms-2 font-semibold text-lg mt-0.5">Cây trồng phát triển tốt</p>
        <span class="block w-4 ms-1 text-green-400">@svg('untitledui-star-06')</span>
    </div>

    <div class="col-span-1 bg-white rounded-xl p-2 border-solid border border-grey-500 flex justify-center">
        <div class="flex flex-col text-xl font-semibold">
            <div class="flex">
                <span class="ms-2 text-center h-8 w-8 inline-block text-yellow-500">@svg('heroicon-o-shield-exclamation')</span>
                <p class="ms-2 font-semibold text-lg mt-0.5">Có 3 chỉ số đạt chưa yêu cầu</p>
            </div>
        </div>
    </div>
</div>

<script type="module">
    const tree_health = document.querySelector('#health_tree');
    const tree_health_icon = document.querySelector('#health_tree_icon');

    var input = "pH is {{ $pH }}. Total Potassium is {{ $Potassium }}. Total Phosphorus is {{ $Phosphorus }}. Total Nitrogen is {{ $Nitrogen }}. Soil temperature is {{ $SoilTemperature }}. Humidity of soil is {{ $Humidity }}. Soil moisture of soil is {{ $SoilMoisture }}. Conductivity of soil is {{ $Conductivity }}. Air temperature of soil is {{ $SoilTemperature }}.";
    console.log(input);

    axios.post('http://103.20.97.111:8000/v1/chat/completions', {
        model: "utbuiquoc/predict_soil_quality_16bit",
        messages: [
            {
				"role": "user",
				"content": input
            }
        ]
    })
    .then(res => {
        let health = res.data.choices[0].message.content;
        console.log(health);

        if (health == "healthy") {
            tree_health.innerText = "Cây trồng phát triển tốt";
        } else if (health == "unhealthy") {
            tree_health.innerText = "Cây trồng phát triển không tốt";
            tree_health_icon.classList.remove('text-emerald-400');
        }
    })
    .catch(error => {
        console.log(error);
    });
</script>