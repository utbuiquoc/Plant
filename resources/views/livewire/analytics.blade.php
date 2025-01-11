<div class="w-full h-dvh overflow-auto bg-slate-100 p-5">
	{{-- Nothing in the world is as soft and yielding as water. --}}
	<div class="grid grid-cols-12 w-full gap-5">
		<div class="col-span-5 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.rain :ids="0" />
		</div>

		<div class="col-span-7 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.airquality :ids="0" />
		</div>


		<div class="col-span-6 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.airtemp :ids="0" />
		</div>

		<div class="h-[400px] sticky top-0 z-50 flex flex-col col-span-6 bg-white rounded-xl border-solid border border-sky-500">
			<livewire:chat />
		</div>
		

		<div class="col-span-5 bg-white rounded-xl border-solid border border-grey-500">
			<livewire:map :ids="0" />
		</div>

		<div class="col-span-3 bg-white rounded-xl p-4 border-solid border border-grey-500 ">
			<livewire:charts.ph :ids="0" />
		</div>
		
		<div class="col-span-4 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.soiltemp :ids="0" />
		</div>

		<div class="col-span-4 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.nitrogen :ids="0" />
		</div>

		<div class="col-span-4 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.phosphorus :ids="0" />
		</div>

		<div class="col-span-4 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.potassium :ids="0" />
		</div>

		<div class="col-span-6 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.humidity :ids="0" />
		</div>

		<div class="col-span-6 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.soilmoisture :ids="0" />
		</div>

		<div class="col-span-12 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.conductivity :ids="0" />
		</div>
	</div>
</div>