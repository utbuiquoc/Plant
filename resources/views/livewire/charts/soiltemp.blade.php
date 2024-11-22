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

    var soilTempOptions = {
		series: soiltemp_series,
		chart: {
			height: 350,
			type: 'line',
			animations: {
				enabled: false,
			},
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

	var soilTempChart = new ApexCharts(document.querySelector("#soil-moisture"), soilTempOptions);
	soilTempChart.render();

	setTimeout(() => {
		Echo.channel('soil-temp').listen('SoilTemp', (e) => {
			if (!(e.device_id == device_id)) return;
			console.log(e);
			
			if (soiltemp_series[0].data.length > 20) {
				soiltemp_series[0].data.shift();
				soiltemp_times.shift();
			}

			soiltemp_series[0].data.push(Number(e.value));
			soiltemp_times.push(e.created_at);

			soilTempChart.updateOptions({
				xaxis: {
					categories: soiltemp_times
				},
				series: soiltemp_series
			});
		});
	}, 1000);
</script>