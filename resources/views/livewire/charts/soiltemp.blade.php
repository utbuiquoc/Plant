{{-- Care about people's approval and you will be their prisoner. --}}
<div id="soil-moisture" class="w-full h-full"></div>

<script>
	let soiltemp_data = @json($data);
	let soiltemp_series = [];
    let soiltemp_times = [];

    soiltemp_data[0].forEach(el => {
        soiltemp_times.push(el.created_at);
    });

	soiltemp_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		soiltemp_series.push({
			name: name,
			data: values,
		});
	});

    var soilMoistureOptions = {
		series: soiltemp_series,
		chart: {
			height: 350,
			type: 'line',
			zoom: {
			enabled: false
			}
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'smooth'
		},
		title: {
			text: 'Nhiệt độ đất',
			align: 'left'
		},
        subtitle: {
          text: '℃',
          align: 'left'
        },
		grid: {
			row: {
			colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
			opacity: 0.5
			},
		},
        xaxis: {
            type: 'datetime',
            categories: soiltemp_times,
        },
	};

	var soilMoistureChart = new ApexCharts(document.querySelector("#soil-moisture"), soilMoistureOptions);
	soilMoistureChart.render();
</script>