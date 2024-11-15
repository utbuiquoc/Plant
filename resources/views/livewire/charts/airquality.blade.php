<div class="w-full" id="air">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>

<script>
	let datas = @json($data);
	let series = [];

	datas.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(el.value);
		});
		
		series.push({
			name: name,
			data: values,
		});
	});

	
    var airOptions = {
		series: series,

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