<div id="phosphorus">
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>

<script type="module">
    let phosphorus_data = @json($data);
	let phosphorus_series = [];
    let phosphorus_times = [];

    phosphorus_data[0].forEach(el => {
        phosphorus_times.push(el.created_at);
    });

	phosphorus_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		phosphorus_series.push({
			name: name,
			data: values,
		});
	});
    
    var options = {
        series: phosphorus_series,
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
            categories: phosphorus_times,
        },
		title: {
			text: 'Phốt pho',
			align: 'left'
		},
        subtitle: {
          text: 'ppm',
          align: 'left'
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var phosphorusChart = new ApexCharts(document.querySelector("#phosphorus"), options);
    phosphorusChart.render();

    setTimeout(() => {
		Echo.channel('phosphorus').listen('Phosphorus', (e) => {
			// if (!(e.device_id == device_id)) return;
			console.log(e);
			
			if (phosphorus_series[0].data.length > 20) {
				phosphorus_series[0].data.shift();
				phosphorus_times.shift();
			}

			phosphorus_series[0].data.push(Number(e.value));
			phosphorus_times.push(e.created_at);

			phosphorusChart.updateOptions({
				xaxis: {
					categories: phosphorus_times
				},
				series: phosphorus_series
			});
		});
	}, 1000);
</script>