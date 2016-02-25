/**
 * Created by joanna on 11/4/15.
 */
// File: library/main.js

var myOptions = {
    zoom: 14,
    center: new google.maps.LatLng(40.7298029,-73.63611),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: [{"featureType":"administrative.country","elementType":"labels.icon","stylers":[{"visibility":"on"}]}]
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




