<div id="humidity">
    {{-- The Master doesn't talk, he acts. --}}
</div>

<script>
    let humidity_data = @json($data);
	let humidity_series = [];
    let humidity_times = [];

    humidity_data[0].forEach(el => {
        humidity_times.push(el.created_at);
    });

	humidity_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		humidity_series.push({
			name: name,
			data: values,
		});
	});

    var options = {
        series: humidity_series,
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
            categories: humidity_times,
        },
		title: {
			text: 'Độ dẫn điện',
			align: 'left'
		},
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#humidity"), options);
    chart.render();
</script>