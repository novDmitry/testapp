if( $('#map').length) {
    function initMap() {
        let jsContactButton = $('.jsContactButton');
        map = new google.maps.Map($('#map')[0], {
            zoom: 5,
            center: { lat: 48.0020522, lng: 28.3455769 },
            disableDefaultUI: true
        });
        jsContactButton.each(function () {
            let $this = $(this),
                coords = { lat: $this.data('lat'), lng: $this.data('lng') },
                info = $this.data('info');
            infowindow = new google.maps.InfoWindow({});
            marker = new google.maps.Marker({
                position: coords,
                map: map,
                icon: '../img/marker.png'
            });
            marker.addListener('click', function () {
                infowindow.setContent(info)
                infowindow.open(map, this);
            });
            jsContactButton.on('click', (function () {
                map.setZoom(16);
                map.setCenter({ lat: $(this).data('lat'), lng: $(this).data('lng') })
            }))
        });
    }
initMap()
}