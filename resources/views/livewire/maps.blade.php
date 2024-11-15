<div class="w-screen h-screen" id="map">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>

<script>
    let map = L.map('map').setView([17.5065322, 106.5491147], 17);

    Esri_WorldImagery.addTo(map);
        
    L.control.layers(maps).addTo(map);
    L.control.navbar().addTo(map);

    const devices = @json($devices);
    
    devices.forEach(device => {
        let toastEl = `
            <div <div class="grid grid-cols-2 w-[300px]">
                <div class="grid-span-1 flex flex-col space-y-2">
                    <div class="">
                        <p class="!m-0">Nitơ</p>
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
                    </div>
                    <div>
                        <p class="!m-0">Phốt pho</p>
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
                    </div>
                    <div>
                        <p class="!m-0">Kali</p>
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
                    </div>
                    <div>
                        <p class="!m-0">Nhiệt độ đất</p>
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
                    </div>
                    <div>
                        <p class="!m-0">Độ ẩm đất</p>
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
                    </div>
                    <div>
                        <p class="!m-0">Độ dẫn điện</p>
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                        </div>
                    </div>
                </div>
                <div class="grid-span-1">
                    <a href="/device/${device.id}" class="block w-3 h-3 absolute right-[20px] top-[6px] text-gray-400">@svg('gravityui-arrow-up-right-from-square')</a>
                    <img class="w-full h-full object-cover p-2 mt-2 ml-3 rounded-2xl" src="${device.img}" alt="">
                </div>
            </div>
            </div>
        `;
        
        let marker = L.marker([device.latitude, device.longitude]).addTo(map);
        let inforWindown = L.popup({ closeOnClick: false})
            .setLatLng(marker.getLatLng())
            .setContent(toastEl);
        marker.bindPopup(inforWindown);
    });
</script>