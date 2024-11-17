<div id="soilmoisture">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>

<script>
    let soilmoisutre_data = @json($data);
	let soilmoisutre_series = [];
    let soilmoisutre_times = [];

    soilmoisutre_data[0].forEach(el => {
        soilmoisutre_times.push(el.created_at);
    });

	soilmoisutre_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		soilmoisutre_series.push({
			name: name,
			data: values,
		});
	});

    var options = {
        series: soilmoisutre_series,
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
            categories: soilmoisutre_times
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

    var chart = new ApexCharts(document.querySelector("#soilmoisture"), options);
    chart.render();
</script>