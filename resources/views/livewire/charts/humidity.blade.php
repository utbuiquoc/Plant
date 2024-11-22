<div id="humidity">
    {{-- The Master doesn't talk, he acts. --}}
</div>

<script>
    let humidity_data = @json($data);
	let humidity_series = [];
    let humidity_times = [];

    humidity_data[0].forEach(el => {
        humidity_times.push(el.created_at);
    });

	humidity_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		humidity_series.push({
			name: name,
			data: values,
		});
	});

    var options = {
        series: humidity_series,
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
            categories: humidity_times,
        },
		title: {
			text: 'Độ ẩm',
			align: 'left'
		},
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var humidityChart = new ApexCharts(document.querySelector("#humidity"), options);
    humidityChart.render();

    setTimeout(() => {
		Echo.channel('humidity').listen('Humidity', (e) => {
			if (!(e.device_id == device_id)) return;
			
			if (humidity_series[0].data.length > 20) {
				humidity_series[0].data.shift();
				humidity_times.shift();
			}

			humidity_series[0].data.push(Number(e.value));
			humidity_times.push(e.created_at);

			humidityChart.updateOptions({
				xaxis: {
					categories: humidity_times,
				},
				series: humidity_series,
			});
		});
	}, 1000);
</script>