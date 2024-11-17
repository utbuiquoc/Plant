<div id="nitrogen">
    {{-- Do your work, then step back. --}}
</div>

<script>
    let nitrogen_data = @json($data);
	let nitrogen_series = [];
    let nitrogen_times = [];

    nitrogen_data[0].forEach(el => {
        nitrogen_times.push(el.created_at);
    });

	nitrogen_data.forEach(data => {
		let values = [];
		let name = 'Thiết bị ' + data[0].device_id;
		data.forEach(el => {
			values.push(Number(el.value));
		});
		
		nitrogen_series.push({
			name: name,
			data: values,
		});
	});
    
    var options = {
        series: nitrogen_series,
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
            categories: nitrogen_times,
        },
		title: {
			text: 'Nitơ',
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

    var chart = new ApexCharts(document.querySelector("#nitrogen"), options);
    chart.render();
</script>