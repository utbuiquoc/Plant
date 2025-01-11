<div id="conductivity">
    {{-- The whole world belongs to you. --}}
</div>

<script type="module">
    let conductivity_data = @json($data);
	let conductivity_series = [];
    let conductivity_times = [];

    conductivity_data[0].forEach(el => {
        conductivity_times.push(el.created_at);
    });

	conductivity_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		conductivity_series.push({
			name: name,
			data: values,
		});
	});

    var options = {
        series: conductivity_series,
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
            categories: conductivity_times,
        },
		title: {
			text: 'Độ dẫn điện',
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
    
    var conductivityChart = new ApexCharts(document.querySelector("#conductivity"), options);
    conductivityChart.render();

    setTimeout(() => {
		Echo.channel('conductivity').listen('Conductivity', (e) => {
			// if (!(e.device_id == device_id)) return;
			
			if (conductivity_series[0].data.length > 20) {
				conductivity_series[0].data.shift();
				conductivity_times.shift();
			}

			conductivity_series[0].data.push(Number(e.value));
			conductivity_times.push(e.created_at);

			conductivityChart.updateOptions({
				xaxis: {
					categories: conductivity_times,
				},
				series: conductivity_series,
			});
		});
	}, 1000);
</script>
