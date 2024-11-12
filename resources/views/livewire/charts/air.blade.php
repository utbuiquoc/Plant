<div class="w-full" id="air">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>

<script>
    var airOptions = {
		series: [
			{
				name: 'Metric1',
				data: [23, 27, 1, 80, 78, 11, 6, 66, 36, 56, 63, 86, 8, 4, 71, 15, 99, 17]
			},
			{
				name: 'Metric2',
				data: [81, 77, 42, 37, 54, 7, 76, 5, 93, 83, 22, 96, 2, 55, 48, 12, 14, 73]
			},
			// {
			// 	name: 'Metric3',
			// 	data: [91, 21, 25, 10, 100, 32, 70, 34, 90, 24, 20, 30, 88, 68, 82, 59, 69, 95]
			// }
		],

		chart: {
			height: 200,
			type: 'heatmap',
		},
		dataLabels: {
			enabled: false
		},
		colors: ["#008FFB"],
		title: {
			text: 'Chất lượng không khí'
		},
		subtitle: {
          text: 'AQI',
          align: 'left'
        },
	};

	var airChart = new ApexCharts(document.querySelector("#air"), airOptions);
	airChart.render();
</script>