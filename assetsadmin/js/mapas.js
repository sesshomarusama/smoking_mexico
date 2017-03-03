$(function () {

    // Satellite Map
    var myLatlng = new google.maps.LatLng(19.3402705, -99.4760371);
    var mapOptions = {
        streetViewControl: true,
        zoom: 12,
        scrollwheel: true, //we disable de scroll over the map, it is a really annoing when you scroll through page
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP // SATELLITE | HYBRID | ROADMAP | TERRAIN
    };

    var map = new google.maps.Map(document.getElementById("satelliteMap"), mapOptions);

    var marker = new google.maps.Marker({
        draggable:true,
        position: myLatlng,
        title: "UTVT",
        animation: google.maps.Animation.BOUNCE // BOUNCE | DROP
    });
    
    var infowindow = new google.maps.InfoWindow({
        content: "Nos alegra ternerte aquí :)"
    });
    
    infowindow.open(map,marker);
    
    google.maps.event.addListener(marker, 'dragend', function(marker){
        var latLng = marker.latLng; 
        $("#latitude").val(latLng.lat());
        $("#longitude").val(latLng.lng());
     });

    marker.setMap(map);
});