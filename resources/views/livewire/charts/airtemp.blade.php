<div id="temperature">
    {{-- The best athlete wants his opponent at his best. --}}
</div>

<script>
    var temperatureOptions = {
		series: [
			{
				name: 'series1',
				data: [31, 40, 28, 51, 42, 109, 100]
			}, 
			{
				name: 'series2',
				data: [11, 32, 45, 32, 34, 52, 41]
			}
		],
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
			categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },		
		title: {
			text: 'Nhiệt độ không khí',
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