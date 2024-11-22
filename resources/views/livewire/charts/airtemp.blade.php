<div id="temperature">
    {{-- The best athlete wants his opponent at his best. --}}
</div>

<script>
	let airtemp_data = @json($data);
	let airtemp_series = [];
    let airtemp_times = [];
	let device_id;

    airtemp_data[0].forEach(el => {
        airtemp_times.push(el.created_at);
    });

	airtemp_data.forEach(data => {
		let values = [];
		device_id = data[0].device_id;
		let name = 'Thiết bị ' + data[0].device_id;

		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		airtemp_series.push({
			name: name,
			data: values,
		});
	});
	
    var temperatureOptions = {
		series: airtemp_series,
		chart: {
			height: 350,
			type: 'area',
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
        xaxis: {
			type: 'datetime',
			categories: airtemp_times
		},
		title: {
			text: 'Nhiệt độ không khí',
			align: 'left'
		},
        subtitle: {
          text: '℃',
          align: 'left'
        },
        tooltip: {
			x: {
				format: 'dd/MM/yy HH:mm'
			},
        },
	};

	var temperatureChart = new ApexCharts(document.querySelector("#temperature"), temperatureOptions);
	temperatureChart.render();

	setTimeout(() => {
		Echo.channel('air-temp').listen('AirTemp', (e) => {
			if (!(e.device_id == device_id)) return;
			
			if (airtemp_series[0].data.length > 20) {
				airtemp_series[0].data.shift();
				airtemp_times.shift();
			}

			airtemp_series[0].data.push(Number(e.value));
			airtemp_times.push(e.created_at);

			temperatureChart.updateOptions({
				xaxis: {
					categories: airtemp_times
				},
				series: airtemp_series
			});
		});
	}, 1000);
</script>