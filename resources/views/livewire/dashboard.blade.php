<div class="w-full bg-slate-100 p-3 flex">
	{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
	<div class="grid grid-cols-10 gap-4">
		<div class="col-span-10 bg-white rounded-xl p-12 border-solid border border-grey-500"
			 style="background-image: url('{{ asset('images/summer.jpg') }}')">
			<p class="text-4xl text-white font-bold">Hạ</p>
		</div>
		<div class="col-span-3 bg-white rounded-xl p-5 border-solid border border-grey-500">
			<div class="flex flex-row text-xl font-semibold mb-3">
				<x-hugeicons-soil-moisture-global class="text-sky-400 mt-1" /> 
				<p class="ms-2">Môi trường</p>
			</div>

			<div class="flex flex-row">
				<div class="flex flex-col justify-evenly">	
					<p>Mưa: không</p>
					<p>Nhiệt độ môi trường: 32℃</p>
					<p>Độ ẩm không khí: 96%</p>
				</div>

				<div class="flex justify-center grow">
					<x-fluentui-weather-cloudy-20 class="text-slate-500 w-32" />
				</div>
			</div>
		</div>

		<div class="col-span-3 bg-white rounded-xl p-5 border-solid border border-grey-500">
			<div class="flex flex-row text-xl font-semibold mb-3">
				<x-bx-notification class="w-7 mt-0.5" /> 
				<p class="ms-2">Thông báo</p>
			</div>

			<div class="flex flex-col">
				<div class="mb-2 w-full bg-white border border-gray-200 rounded-xl" role="alert" tabindex="-1" aria-labelledby="hs-toast-warning-example-label">
					<div class="flex p-4">
					  <div class="shrink-0">
							<svg class="shrink-0 size-4 text-yellow-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
							</svg>
						</div>
						<div class="ms-3 w-full flex flex-row justify-between">
							<p id="hs-toast-warning-example-label" class="text-sm">
								Thiết bị 1 có tham số bất thường
							</p>

							<a href="" class="text-sky-500 text-sm bold-medium">Đi đến</a>
						</div>
					</div>
				</div>

				<div class="mb-2 w-full bg-white border border-gray-200 rounded-xl" role="alert" tabindex="-1" aria-labelledby="hs-toast-warning-example-label">
					<div class="flex p-4">
					  <div class="shrink-0">
							<svg class="shrink-0 size-4 text-yellow-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
							</svg>
						</div>
						<div class="ms-3 w-full flex flex-row justify-between">
							<p id="hs-toast-warning-example-label" class="text-sm">
								Thiết bị 1 có tham số bất thường
							</p>

							<a href="" class="text-sky-500 text-sm bold-medium">Đi đến</a>
						</div>
					</div>
				</div>

				<div class="mb-2 w-full bg-white border border-gray-200 rounded-xl" role="alert" tabindex="-1" aria-labelledby="hs-toast-warning-example-label">
					<div class="flex p-4">
					  <div class="shrink-0">
							<svg class="shrink-0 size-4 text-yellow-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
							</svg>
						</div>
						<div class="ms-3 w-full flex flex-row justify-between">
							<p id="hs-toast-warning-example-label" class="text-sm">
								Thiết bị 1 có tham số bất thường
							</p>

							<a href="" class="text-sky-500 text-sm bold-medium">Đi đến</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-span-4 bg-white rounded-xl p-5 border-solid border border-grey-500">
			<div class="flex flex-row text-xl font-semibold mb-3">
				<p class="ms-2">Đánh giá</p>
			</div>

			<div class="p-5">
				<p>
					Với điều kiện đất và môi trường như trên, cây trồng có khả năng phát triển rất tốt. Đất giàu dinh dưỡng và khả năng giữ nước tốt sẽ cung cấp đủ chất dinh dưỡng và độ ẩm cần thiết cho cây. Khí hậu ôn hòa và lượng mưa ổn định sẽ tạo điều kiện thuận lợi cho quá trình quang hợp và sinh trưởng của cây. Do đó, cây trồng trong điều kiện này sẽ có năng suất cao và chất lượng tốt.
				</p>
			</div>
		</div>

		<div class="col-span-6 bg-white rounded-xl p-5 border-solid border border-grey-500">
			<h1 class="text-2xl font-semibold mb-3">Trạng thái đất</h1>
			<div class="grid grid-cols-2 gap-4">
				<div class="col-span-1 flex flex-col space-y-4">
					<div class="">
						<p>Nitơ</p>
						<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
							<div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
								style="width: 45%"> 45%</div>
						</div>
					</div>

					
					<div>
						<p>Phốt pho</p>
						<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
							<div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
								style="width: 45%"> 45%</div>
						</div>
					</div>

					<div>
						<p>Kali</p>
						<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
							<div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
								style="width: 45%"> 45%</div>
						</div>
					</div>

					<div>
						<p>Nhiệt độ đất</p>
						<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
							<div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
								style="width: 45%"> 45%</div>
						</div>
					</div>

					<div>
						<p>Độ ẩm đất</p>
						<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
							<div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
								style="width: 45%"> 45%</div>
						</div>
					</div>

					<div>
						<p>Độ dẫn điện</p>
						<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
							<div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
								style="width: 45%"> 45%</div>
						</div>
					</div>
				</div>

				<div class="col-span-1">
					<div id="chart"></div>
				</div>
			</div>

		</div>

		<div class="col-span-4 bg-white rounded-xl border-solid border border-grey-500">
			<livewire:map />
		</div>
	</div>
</div>

<script>
	var options = {
		series: [44, 55, 67, 83],
		chart: {
			height: 350,
			type: 'radialBar',
		},
		plotOptions: {
			radialBar: {
				dataLabels: {
					name: {
						fontSize: '22px',
					},
					value: {
						fontSize: '16px',
					},
					total: {
						show: true,
						label: 'Trạng thái',
						formatter: function (w) {
							// By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
							return 'Tốt'
						}
					}
				}
			}
		},
		labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
	};

	var chart = new ApexCharts(document.querySelector("#chart"), options);
	chart.render();
</script>