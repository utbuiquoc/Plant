<div class="w-full h-full rounded-lg" id="map"></div>

<script>
    var map = L.map('map').setView([17.4759819251346, 106.6071201119984], 17);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([17.4759819251346, 106.6071201119984]).addTo(map);
    var inforWindown = L.popup({ closeOnClick: false})
        .setLatLng(marker.getLatLng())
        .setContent('"<b>Hello Everyone</b> <br> Hello World!!!!"');
    marker.bindPopup(inforWindown);
    // inforWindown.openOn(map);
</script>