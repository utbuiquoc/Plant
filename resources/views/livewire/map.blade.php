<div class="w-full h-full rounded-lg" id="map"></div>

<script>
    const devices = @json($data);
    
    let map = L.map('map').setView([devices[0].latitude, devices[0].longitude], 16);

    Esri_WorldImagery.addTo(map);

    L.control.layers(maps).addTo(map);
    L.control.navbar().addTo(map);
    
    devices.forEach(device => {
        let marker = L.marker([device.latitude, device.longitude], {
            // icon: logo,
            alt: device.name,
            title: "Mở thiết bị",
            riseOnHover: true,
            myUrl: '/device/' + device.id,
        })
            .addTo(map)
            .bindTooltip("<h3>" + device.name + "</h3>", { direction: "top" })
            .on('click', function(evt) {
                window.open(evt.target.options.myUrl, '_blank');
            });
    });
</script>