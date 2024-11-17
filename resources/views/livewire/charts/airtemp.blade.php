<div id="temperature">
    {{-- The best athlete wants his opponent at his best. --}}
</div>

<script>
	let airtemp_data = @json($data);
	let airtemp_series = [];
    let airtemp_times = [];

    airtemp_data[0].forEach(el => {
        airtemp_times.push(el.created_at);
    });

	airtemp_data.forEach(data => {
		let values = [];
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
			type: 'area'
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
</script>