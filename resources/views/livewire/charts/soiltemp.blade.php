{{-- Care about people's approval and you will be their prisoner. --}}
<div id="soil-moisture" class="w-full h-full"></div>

<script>
    var soilMoistureOptions = {
		series: [
			{
				name: "Thiết bị 1",
				data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
			},
			{
				name: "Thiết bị 2",
				data: [10, 43, 32, 49, 52, 60, 71, 94, 140]
			},
			// {
			// 	name: "Thiết bị 3",
			// 	data: [12, 44, 37, 55, 44, 66, 70, 99, 144]
			// },
		],
		chart: {
			height: 350,
			type: 'line',
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
		title: {
			text: 'Độ ẩm đất',
			align: 'left'
		},
		grid: {
			row: {
			colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
			opacity: 0.5
			},
		},
		xaxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
		}
	};

	var soilMoistureChart = new ApexCharts(document.querySelector("#soil-moisture"), soilMoistureOptions);
	soilMoistureChart.render();
</script>