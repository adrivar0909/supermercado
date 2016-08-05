var geocoder;
var map;
var infowindow = new google.maps.InfoWindow();
var marker = new google.maps.Marker();
 
function closeInfoWindow() {
        infowindow.close();
   }
 
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(20.68008, -101.35402);
  var mapOptions = {
    zoom: 8,
    center: latlng,
    mapTypeId: 'roadmap'
  }
  map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
 
  google.maps.event.addListener(map, 'click', function(){
            closeInfoWindow();
          });
}

 
function codeLatLng() {
  var input = $('#latlng').val();
  var latlngStr = input.split(',', 2);
  var lat = parseFloat(latlngStr[0]);
  var lng = parseFloat(latlngStr[1]);
  var latlng = new google.maps.LatLng(lat, lng);
  geocoder.geocode({'latLng': latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[0]) {
        map.fitBounds(results[0].geometry.viewport);
                marker.setMap(map);
                marker.setPosition(latlng);
        $('#address').text(results[0].formatted_address);
        infowindow.setContent(results[0].formatted_address);
        infowindow.open(map, marker);
        google.maps.event.addListener(marker, 'click', function(){
            infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
        });
      } else {
        alert('No results found');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
  });
}
 
$(document).ready(function(){
   initialize();
});