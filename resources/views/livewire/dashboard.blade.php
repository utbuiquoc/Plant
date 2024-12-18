<div class="w-full bg-slate-100 p-5">
	{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
	<div class="grid grid-cols-10 gap-5">
		<div class="col-span-6">
			<div class="mb-5 bg-white rounded-xl p-5 border-solid border border-grey-500">
				<livewire:charts.open-meteo />
			</div>

			<div class="bg-white rounded-xl p-5 border-solid border border-grey-500">
				<livewire:charts.overview :ids="0" />
			</div>
		</div>
		
		<div class="col-span-4 flex flex-col">
			<div class="mb-5 bg-white rounded-xl p-2 border-solid border border-grey-500">
				<div class="flex flex-col text-xl font-semibold">
					<div class="flex">
						<span class="ms-2 text-center h-8 w-8 inline-block text-yellow-500">@svg('heroicon-o-shield-exclamation')</span>
						<p class="ms-2 font-semibold text-lg mt-0.5">Có 3 chỉ số đạt chưa yêu cầu</p>
					</div>
				</div>
			</div>
			
			<div class="mb-5 bg-white rounded-xl p-5 border-solid border border-grey-500">
				<div class="flex flex-row text-xl font-semibold mb-3">
					<p class="ms-2">Đánh giá</p>
				</div>
	
				<div class="p-5">
					<p>
						Với điều kiện đất và môi trường như trên, cây trồng có khả năng phát triển rất tốt. Đất giàu dinh dưỡng và khả năng giữ nước tốt sẽ cung cấp đủ chất dinh dưỡng và độ ẩm cần thiết cho cây. Khí hậu ôn hòa và lượng mưa ổn định sẽ tạo điều kiện thuận lợi cho quá trình quang hợp và sinh trưởng của cây. Do đó, cây trồng trong điều kiện này sẽ có năng suất cao và chất lượng tốt.
					</p>
				</div>
			</div>

			<div class="w-full h-[33rem] bg-white rounded-xl border-solid border border-grey-500">
				<livewire:map :ids="0" />
			</div>			
		</div>
	</div>
</div>