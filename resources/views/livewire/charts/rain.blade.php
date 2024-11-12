<div id="rain">
    {{-- Stop trying to control. --}}
</div>

<script>
    var options = {
        series: [{
            data: [{
                    x: 'Thiết bị 1',
                    y: [
                        new Date('2019-03-02').getTime(),
                        new Date('2019-03-04').getTime()
                    ]
                },
                {
                    x: 'Thiết bị 2',
                    y: [
                        new Date('2019-03-04').getTime(),
                        new Date('2019-03-08').getTime()
                    ]
                },
            ]
        }],
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
        }
    };

    var chart = new ApexCharts(document.querySelector("#rain"), options);
    chart.render();
</script>