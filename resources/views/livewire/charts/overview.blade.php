<div id="overview" class="w-full">
    {{-- Do your work, then step back. --}}
</div>

<script>
    var options = {
        series: [{
            data: [{
                    x: 'Chất lượng không khí',
                    y: {{ $AirQuality }},
                },
                {
                    x: 'Nhiệt độ môi trường',
                    y: {{ $Airtemp }}
                },
                {
                    x: 'Độ ẩm không khí',
                    y: {{ $Humidity }}
                },
                {
                    x: 'pH',
                    y: {{ $pH }}
                },
                {
                    x: 'Nitơ',
                    y: {{ $Nitrogen }}
                },
                {
                    x: 'Phốt pho',
                    y: {{ $Phosphorus }}
                },
                {
                    x: 'Kali',
                    y: {{ $Potassium }}
                },
                {
                    x: 'Độ ẩm đất',
                    y: {{ $SoilMoisture }}
                },
                {
                    x: 'Nhiệt độ đất',
                    y: {{ $SoilTemperature }}
                },
            ]
        }],
        legend: {
            show: false
        },
        chart: {
            height: 400,
            type: 'treemap'
        },
        title: {
            text: 'Chỉ số trực tiếp'
        },
        dataLabels: {
            enabled: true,
            style: {
                fontSize: '12px',
            },
            formatter: function(text, op) {
                console.log(op.w.config.colors[0]);
                if (text == 'Nhiệt độ môi trường' || text == "Nhiệt độ đất")
                    return [text, op.value + '℃']
                if (text == 'Độ ẩm đất' || text == 'Độ ẩm không khí')
                    return [text, op.value + '%'];
                if (text == 'Nitơ' || text == 'Phốt pho' || text == 'Kali')
                    return [text, op.value + ' ppm']
    
                return [text, op.value];
            },
            offsetY: -4
        },
        colors: [
            '#87CEEB',
            '#ebcf34',
            '#ADD8C7',
            '#78cc33',
            '#bcc8e3',
            '#eb34b7',
            '#d0d1d0',
            '#1E5D8C',
            '#421243',
        ],
        plotOptions: {
            treemap: {
                distributed: true,
                enableShades: false,
            }
        },
        // plotOptions: {
        //     treemap: {
        //         enableShades: true,
        //         shadeIntensity: 0.5,
        //         reverseNegativeShade: true,
                
        //         // colorScale: {
        //         //     ranges: [{
        //         //             from: -6,
        //         //             to: 0,
        //         //             color: '#CD363A'
        //         //         },
        //         //         {
        //         //             from: 0.001,
        //         //             to: 6,
        //         //             color: '#52B12C'
        //         //         }
        //         //     ]
        //         // }
        //     }
        // }
    };

    var chart = new ApexCharts(document.querySelector("#overview"), options);
    chart.render();
</script>