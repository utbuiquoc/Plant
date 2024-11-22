<div id="pH" class="w-full">
    {{-- Be like water. --}}
</div>

<script>
	let pH_data = @json($data);
	let pH_series = [];
    let pH_times = [];

    pH_data[0].forEach(el => {
        pH_times.push(el.created_at);
    });

	pH_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		pH_series.push({
			'name': name,
			'data': values,
		});
	});

	var pHOptions = {
		series: pH_series,
		chart: {
			type: 'bar',
			height: 350,
			animations: {
				enabled: false,
			},
			zoom: {
				enabled: false
			}
		},
		plotOptions: {
			bar: {
				horizontal: false,
				columnWidth: '55%',
				endingShape: 'rounded'
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 2,
			colors: ['transparent']
		},
		xaxis: {
			type: 'datetime',
			categories: pH_times,
		},
		yaxis: {
			title: {
				text: 'pH'
			}
		},
		fill: {
			opacity: 1
		},
		tooltip: {
			y: {
				formatter: function(val) {
					return val + "  pH"
				}
			}
		}
	};

	var pHChart = new ApexCharts(document.querySelector("#pH"), pHOptions);
	pHChart.render();

	setTimeout(() => {
		Echo.channel('ph').listen('pH', (e) => {
			if (!(e.device_id == device_id)) return;
			
			if (pH_series[0].data.length > 20) {
				pH_series[0].data.shift();
				pH_times.shift();
			}

			pH_series[0].data.push(Number(e.value));
			pH_times.push(e.created_at);

			pHChart.updateOptions({
				xaxis: {
					categories: pH_times
				},
				series: pH_series
			});
		});
	}, 1000);
</script>