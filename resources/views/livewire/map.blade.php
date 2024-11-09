<div class="w-full h-full rounded-lg" id="map"></div>

<script>
    let map = L.map('map').setView([17.4759819251346, 106.6071201119984], 17);

    Esri_WorldImagery.addTo(map);

    L.control.layers(maps).addTo(map);
    L.control.navbar().addTo(map);
    
    let marker = L.marker([17.4759819251346, 106.6071201119984], {
        // icon: logo,
        alt: "Patrick Engineering logo",
        title: "Click for more info",
        riseOnHover: true,
        myUrl: 'https://www.google.com/'
    })
        .addTo(map)
        .bindTooltip("<h3>" + 'Berthoud, CO' + "</h3>", { direction: "top" })
        .on('click', function(evt) {
            window.open(evt.target.options.myUrl, '_blank');
        });

    // let inforWindown = L.popup({ closeOnClick: false})
    //     .setLatLng(marker.getLatLng())
    //     .setContent('"<b>Hello Everyone</b> <br> Hello World!!!!"');
    // marker.bindPopup(inforWindown);

</script>