<div id="phosphorus">
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>

<script>
    let phosphorus_data = @json($data);
	let phosphorus_series = [];
    let phosphorus_times = [];

    phosphorus_data[0].forEach(el => {
        phosphorus_times.push(el.created_at);
    });

	phosphorus_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		phosphorus_series.push({
			name: name,
			data: values,
		});
	});
    
    var options = {
        series: phosphorus_series,
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
            categories: phosphorus_times,
        },
		title: {
			text: 'Phốt pho',
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

    var chart = new ApexCharts(document.querySelector("#phosphorus"), options);
    chart.render();
</script>