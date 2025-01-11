<div id="nitrogen">
    {{-- Do your work, then step back. --}}
</div>

<script type="module">
    let nitrogen_data = @json($data);
	let nitrogen_series = [];
    let nitrogen_times = [];

    nitrogen_data[0].forEach(el => {
        nitrogen_times.push(el.created_at);
    });

	nitrogen_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		nitrogen_series.push({
			name: name,
			data: values,
		});
	});
    
    var nitrogenOptions = {
        series: nitrogen_series,
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
            categories: nitrogen_times,
        },
		title: {
			text: 'Nitơ',
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

    var nitrogenChart = new ApexCharts(document.querySelector("#nitrogen"), nitrogenOptions);
    nitrogenChart.render();

    setTimeout(() => {
		Echo.channel('nitrogen').listen('Nitrogen', (e) => {
			console.log(e);
			// if (!(e.device_id == device_id)) return;
			console.log(e);
			
			if (nitrogen_series[0].data.length > 20) {
				nitrogen_series[0].data.shift();
				nitrogen_times.shift();
			}

			nitrogen_series[0].data.push(Number(e.value));
			nitrogen_times.push(e.created_at);

			nitrogenChart.updateOptions({
				xaxis: {
					categories: nitrogen_times
				},
				series: nitrogen_series
			});
		});
	}, 1000);
</script>