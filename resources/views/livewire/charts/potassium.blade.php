<div id="potassium">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>

<script>
    let potassium_data = @json($data);
	let potassium_series = [];
    let potassium_times = [];

    potassium_data[0].forEach(el => {
        potassium_times.push(el.created_at);
    });

	potassium_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		potassium_series.push({
			name: name,
			data: values,
		});
	});

    var options = {
        series: potassium_series,
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
            categories: potassium_times,
        },
		title: {
			text: 'Kali',
			align: 'left'
		},
        subtitle: {
          text: 'ppm',
          align: 'left'
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#potassium"), options);
    chart.render();
</script>