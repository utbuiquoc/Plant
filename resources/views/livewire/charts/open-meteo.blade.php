<div id="open-meteo">
    {{-- In work, do what you enjoy. --}}
</div>

<script>
    axios.get('https://api.open-meteo.com/v1/forecast?latitude=17.4692&longitude=106.6155&hourly=temperature_2m,precipitation_probability,precipitation,cloud_cover&timezone=Asia%2FBangkok&start_date=2024-11-22&end_date=2024-11-22')
    .then(function (response) {
        // xử trí khi thành công
        console.log(response.data);

        openMeteoDatas = response.data;

        var options = {
            series: [{
                name: 'Độ bao phủ mây',
                type: 'line',
                data: openMeteoDatas.hourly.cloud_cover,
            }, {
                name: 'Lượng mưa',
                type: 'column',
                data: openMeteoDatas.hourly.precipitation,
            }, {
                name: 'Xác suất lượng mưa',
                type: 'line',
                data: openMeteoDatas.hourly.precipitation_probability,
            }, {
                name: 'Nhiệt độ',
                type: 'line',
                data: openMeteoDatas.hourly.temperature_2m,
            }],
            chart: {
                height: 350,
                type: 'line',
                stacked: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: [1, 1, 4]
            },
            title: {
                text: 'Dự báo thời tiết',
                align: 'left',
                offsetX: 110
            },
            xaxis: {
                type: 'datetime',
                categories: openMeteoDatas.hourly.time,
            },
            yaxis: [{
                    seriesName: 'Độ bao phủ mây',
                    axisTicks: {
                        show: true,
                    },
                    axisBorder: {
                        show: true,
                        color: '#008FFB'
                    },
                    labels: {
                        style: {
                            colors: '#008FFB',
                        }
                    },
                    title: {
                        text: "Độ bao phủ mây (%)",
                        style: {
                            color: '#008FFB',
                        }
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                {
                    seriesName: 'Lượng mưa',
                    opposite: true,
                    axisTicks: {
                        show: true,
                    },
                    axisBorder: {
                        show: true,
                        color: '#00E396'
                    },
                    labels: {
                        style: {
                            colors: '#00E396',
                        }
                    },
                    title: {
                        text: "Lượng mưa (mm)",
                        style: {
                            color: '#00E396',
                        }
                    },
                },
                {
                    seriesName: 'Xác suất lượng mưa',
                    opposite: true,
                    axisTicks: {
                        show: true,
                    },
                    axisBorder: {
                        show: true,
                        color: '#FEB019'
                    },
                    labels: {
                        style: {
                            colors: '#FEB019',
                        },
                    },
                    title: {
                        text: "Xác suất lượng mưa (%)",
                        style: {
                            color: '#FEB019',
                        }
                    }
                },
                {
                    seriesName: 'Nhiệt độ',
                    opposite: true,
                    axisTicks: {
                        show: true,
                    },
                    axisBorder: {
                        show: true,
                        color: '#ff4560'
                    },
                    labels: {
                        style: {
                            colors: '#ff4560',
                        },
                    },
                    title: {
                        text: "Nhiệt độ (℃)",
                        style: {
                            color: '#ff4560',
                        }
                    }
                },
            ],
            tooltip: {
                fixed: {
                    enabled: true,
                    position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
                    offsetY: 30,
                    offsetX: 60
                },
            },
            legend: {
                horizontalAlign: 'left',
                offsetX: 40
            }
        };

        var chart = new ApexCharts(document.querySelector("#open-meteo"), options);
        chart.render();
    })
    .catch(function (error) {
        // xử trí khi bị lỗi
        console.log(error);
    })

    
</script>
