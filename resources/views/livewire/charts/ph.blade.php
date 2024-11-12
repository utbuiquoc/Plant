<div id="pH" class="w-full">
    {{-- Be like water. --}}
</div>

<script>
    var pHOptions = {
		series: [{
			data: [44, 55, 41, 64, 22, 43, 21]
		}, {
			data: [53, 32, 33, 52, 13, 44, 32]
		}],
			chart: {
			type: 'bar',
			height: 350
		},
		plotOptions: {
			bar: {
			horizontal: true,
			dataLabels: {
				position: 'top',
			},
			}
		},
		dataLabels: {
			enabled: true,
			offsetX: -6,
			style: {
			fontSize: '12px',
			colors: ['#fff']
			}
		},
		stroke: {
			show: true,
			width: 1,
			colors: ['#fff']
		},
		title: {
			text: 'Độ pH',
			align: 'left'
		},
		tooltip: {
			shared: true,
			intersect: false
		},
		xaxis: {
			categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
		},
	};

	var pHChart = new ApexCharts(document.querySelector("#pH"), pHOptions);
	pHChart.render();
</script>