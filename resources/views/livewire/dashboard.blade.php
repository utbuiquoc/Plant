<div class="w-full bg-slate-100 p-3">
	{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
	<div class="grid grid-cols-10 gap-4">
		<div class="col-span-3 bg-white rounded-xl p-5 border-solid border border-grey-500">
			Thông số ổn định
		</div>

		<div class="col-span-3 bg-white rounded-xl p-5 border-solid border border-grey-500">
			Cảnh báo
		</div>

		<div class="col-span-4 bg-white rounded-xl p-5 border-solid border border-grey-500">
			<p>Quản lí thiết bị</p>
		</div>

		<div class="col-span-6 bg-white rounded-xl p-5 border-solid border border-grey-500">
			
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
						<p>Nhiệt độ</p>
						<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
							<div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
								style="width: 45%"> 45%</div>
						</div>
					</div>

					<div>
						<p>Độ ẩm</p>
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