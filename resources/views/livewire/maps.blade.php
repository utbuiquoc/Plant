<div class="w-screen h-screen" id="map">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>

<script>
    let devices = @json($data);

    let map = L.map('map').setView([devices[0].latitude, devices[0].longitude], 17);

    Esri_WorldImagery.addTo(map);
        
    L.control.layers(maps).addTo(map);
    L.control.navbar().addTo(map);

    
    devices.forEach(device => {
        let toastEl = `
            <div <div class="grid grid-cols-2 w-[300px]">
                <div class="grid-span-1 flex flex-col space-y-2">
                    <p class="font-bold !m-0">Vị trí:</p> ${device.latitude}, ${device.longitude}
                    <p class="font-bold !m-0">Lắp đặt vào:</p> ${new Date(device.created_at).toLocaleString()}
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