<div class="w-full h-dvh overflow-scroll bg-slate-100 p-5">
	{{-- Nothing in the world is as soft and yielding as water. --}}
	<div class="grid grid-cols-12 w-full gap-5">
		<div class="col-span-5 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.rain />
		</div>

		<div class="col-span-7 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.air />
		</div>


		<div class="col-span-7 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.airtemp />
		</div>

		<div class="flex flex-col col-span-5 bg-white rounded-xl p-4 border-solid border border-sky-500">
			<div class="flex font-bold">Đánh giá <span class="block w-4 ms-1 text-green-400">@svg('untitledui-star-06')</span></div>
			<div class="flex flex-col mt-2 h-[350px] overflow-scroll bg-white border border-gray-200 rounded-2xl p-4">
				<p class="font-bold mb-1">Cải thiện dinh dưỡng</p>

					<p class="mb-1"><span class="font-semibold">Bổ sung phân bón hữu cơ hoặc phân bón vô cơ</span>: Bón phân NPK để cân đối lượng dinh dưỡng cho cây. Nếu có nhu cầu cao về nitrogen hoặc phosphorus, hãy sử dụng phân bón có hàm lượng các chất này cao hơn.</p>
					<p class="mb-1"><span class="font-semibold">Sử dụng phân hữu cơ</span>: Phân hữu cơ giúp cải thiện kết cấu đất và cung cấp vi sinh vật hữu ích, giúp cây trồng phát triển khỏe mạnh.</p>

				<p class="font-bold mb-1">Điều chỉnh độ ẩm đất</p>

					<p class="mb-1"><span class="font-semibold">Tưới tiêu hợp lý</span>: Áp dụng phương pháp tưới nhỏ giọt hoặc tưới phun sương để duy trì độ ẩm ổn định.</p>
					<p class="mb-1"><span class="font-semibold">Sử dụng phủ gốc</span>: Che phủ gốc cây bằng rơm rạ hoặc màng phủ để giữ độ ẩm và giảm bốc hơi nước.</p>

				<p class="font-bold mb-1">Giải pháp chống mặn (nếu EC tăng)</p>

					<p class="mb-1"><span class="font-semibold">Rửa mặn</span>: Tưới rửa đất bằng nước ngọt để làm giảm độ mặn trong trường hợp EC cao.</p>
					<p class="mb-1"><span class="font-semibold">Bón thạch cao</span>: Thạch cao (CaSO₄) có thể được bón để cải tạo đất mặn và giảm độ dẫn điện.</p>

				<p class="font-bold mb-1">Cải thiện cấu trúc đất</p>

					<p class="mb-1"><span class="font-semibold">Sử dụng phân xanh hoặc chất hữu cơ</span>: Tăng cường chất hữu cơ trong đất để cải thiện kết cấu đất và khả năng giữ nước.</p>
					<p class="mb-1"><span class="font-semibold">Luân canh cây trồng</span>: Trồng luân phiên các loại cây giúp duy trì và cải thiện độ phì nhiêu của đất.</p>

				<p class="font-bold mb-1">Ứng phó với biến động nhiệt độ</p>

					<p class="mb-1"><span class="font-semibold">Tạo bóng mát</span>: Trồng cây che bóng hoặc sử dụng lưới che để giảm tác động của nhiệt độ cao vào buổi trưa.</p>
					<p class="mb-1"><span class="font-semibold">Cải tạo đất để giữ ẩm</span>: Trộn đất với các chất giữ ẩm như mùn hoặc gel giữ nước.</p>
			</div>
		</div>
		

		<div class="col-span-5 bg-white rounded-xl border-solid border border-grey-500">
			<livewire:map />
		</div>

		<div class="col-span-3 bg-white rounded-xl p-4 border-solid border border-grey-500 ">
			<livewire:charts.ph />
		</div>
		
		<div class="col-span-4 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.soiltemp />
		</div>

		<div class="col-span-4 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.nitrogen />
		</div>

		<div class="col-span-4 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.phosphorus />
		</div>

		<div class="col-span-4 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.potassium />
		</div>

		<div class="col-span-6 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.humidity />
		</div>

		<div class="col-span-6 bg-white rounded-xl p-4 border-solid border border-grey-500">
			<livewire:charts.soilmoisture />
		</div>
	</div>
</div>