<div id="soilmoisture">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>

<script type="module">
    let soilmoisture_data = @json($data);
	let soilmoisture_series = [];
    let soilmoisture_times = [];

    soilmoisture_data[0].forEach(el => {
        soilmoisture_times.push(el.created_at);
    });

	soilmoisture_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		soilmoisture_series.push({
			name: name,
			data: values,
		});
	});

    var options = {
        series: soilmoisture_series,
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
            categories: soilmoisture_times
        },
        subtitle: {
          text: '℃',
          align: 'left'
        },
		title: {
			text: 'Độ ẩm đất',
			align: 'left'
		},
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var soilMoistureChart = new ApexCharts(document.querySelector("#soilmoisture"), options);
    soilMoistureChart.render();

    setTimeout(() => {
		Echo.channel('soil-moisture').listen('SoilMoisture', (e) => {
			// if (!(e.device_id == device_id)) return;
			console.log(e);
			
			if (soilmoisture_series[0].data.length > 20) {
				soilmoisture_series[0].data.shift();
				soilmoisture_times.shift();
			}

			soilmoisture_series[0].data.push(Number(e.value));
			soilmoisture_times.push(e.created_at);

			soilMoistureChart.updateOptions({
				xaxis: {
					categories: soilmoisture_times
				},
				series: soilmoisture_series
			});
		});
	}, 1000);
</script>