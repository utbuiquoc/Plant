<div class="w-full" id="air">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>

<script>
	let airquality_data = @json($data);
	let irquality_series = [];

	airquality_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push({
				'x': el.created_at,
				'y': el.value
			});
		});
		
		irquality_series.push({
			name: name,
			data: values,
		});
	});

	
    var airOptions = {
		series: irquality_series,
		chart: {
			height: 200,
			type: 'heatmap',
		},
		xaxis: {
			type: "datetime",
			labels: {
				format: 'yyyy',
				showDuplicates: true
			}
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
		plotOptions: {
		heatmap: {
			colorScale: {
				ranges: [
					{
						from: 0,
						to: 49,
						color: '#00E400',
						name: 'Tốt',
					},
					{
						from: 50,
						to: 99,
						color: '#FFFF00',
						name: 'Trung bình',
					},
					{
						from: 100,
						to: 149,
						color: '#FF7E00',
						name: 'Kém',
					},
					{
						from: 150,
						to: 199,
						color: '#FF0000',
						name: 'Xấu',
					},
					{
						from: 200,
						to: 299,
						color: '#8F3F97',
						name: 'Rất xấu',
					},
					{
						from: 300,
						to: 500,
						color: '#7E0023',
						name: 'Nguy hại',
					},
				]
			}
		}
    }
	};

	var airChart = new ApexCharts(document.querySelector("#air"), airOptions);
	airChart.render();
</script>