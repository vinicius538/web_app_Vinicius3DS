<?php
    $google_maps_api_key = "AIzaSyD1ymgJSOFD9yCS4hoC7hNeU8Km40bbQi0";
?>
 <div id="map"></div>
<script>

    function initMap() {

        const localizacao = { lat: -23.55052, lng: -46.633308 };

        const mapa = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: localizacao,
        });

        const marcador = new google.maps.Marker({
            position: localizacao,
            map: mapa,
            title: "São Paulo - SP",
        });
    }
</script>

<script async
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_maps_api_key; ?>&callback=initMap">
</script>