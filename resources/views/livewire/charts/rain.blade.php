<div id="rain">
    {{-- Stop trying to control. --}}
</div>

<script type="module">
    let rain_data = @json($data);
    let datas = [];

	rain_data.forEach(data => {
		let name = 'Thiết bị ' + data[0].device_id;
		
        data.forEach(el => {
            datas.push({
                x: name,
                y: [
                    new Date(el.start).getTime(),
                    new Date(el.end).getTime()
                ],
            });
        })
	});

    let rain_series = [{'data': datas}];

    var options = {
        series: rain_series,
        chart: {
            height: 200,
            type: 'rangeBar'
        },
        plotOptions: {
            bar: {
                horizontal: true
            }
        },
        title: {
			text: 'Mưa',
			align: 'left'
		},
        xaxis: {
            type: 'datetime'
        },
    };

    var chart = new ApexCharts(document.querySelector("#rain"), options);
    chart.render();
</script>