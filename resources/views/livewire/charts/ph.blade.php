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
			height: 350
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
					return "$ " + val + "  pH"
				}
			}
		}
	};

	var chart = new ApexCharts(document.querySelector("#pH"), pHOptions);
	chart.render();
</script>