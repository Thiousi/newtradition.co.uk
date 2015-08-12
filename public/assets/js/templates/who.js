var map;
var $lat = document.getElementById('map-lat').innerHTML;
var $lng = document.getElementById('map-lng').innerHTML;

function initialize() {
  var myLatlng = new google.maps.LatLng($lat,$lng);
  var mapOptions = {
    zoom: 16,
    center: myLatlng,
    scrollwheel: false,
    styles: [{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#194F69"},{"saturation":-90},{"gamma":1},{"lightness":0}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":0}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":0}]}]
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
  });
}

google.maps.event.addDomListener(window, 'load', initialize);