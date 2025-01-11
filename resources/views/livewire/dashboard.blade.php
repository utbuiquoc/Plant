<div class="w-full h-dvh bg-slate-100">
	{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
	<div class="grid grid-cols-12 h-dvh">
		<div class="col-span-6 gap-5 p-5 flex flex-col overflow-auto">
			<div class="w-full">
				<livewire:predict />
			</div>
			
			<div class="bg-white rounded-xl p-5 border-solid border border-grey-500">
				<livewire:charts.open-meteo />
			</div>

			<div class="bg-white rounded-xl p-5 border-solid border border-grey-500">
				<livewire:charts.overview :ids="0" />
			</div>

			<div class="w-full min-h-[350px] bg-white rounded-xl border-solid border border-grey-500">
				<livewire:map :ids="0" />
			</div>
		</div>	

		<div class="col-span-6 h-dvh gap-5 flex flex-col">			
			<div class="h-dvh">
				<livewire:chat />
			</div>
		</div>	
	</div>
</div>