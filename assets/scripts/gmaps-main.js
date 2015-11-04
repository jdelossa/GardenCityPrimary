/**
 * Created by joanna on 11/4/15.
 */
// File: library/main.js

var myOptions = {
    zoom: 14,
    center: new google.maps.LatLng(40.7298029,-73.63611),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]
};

//var map = new google.maps.Map(document.getElementById('map'), myOptions);


// Garden City Primary Medical Care

var lat = 40.7298029,
    lng = -73.63611,

    map = new GMaps({
        div: '#map',
        lat: lat,
        lng: lng,
        options: myOptions
    });

//Markers

map.addMarker ({
    lat: lat,
    lng: lng,
    title: 'Garden City Primary Medical Care',
    infoWindow: {
        content: '<h4><strong>Garden City Primary Medical Care</strong></h4>'
    }
});




