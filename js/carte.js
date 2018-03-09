function myCarte() {
  var carteOptions = {
    center: new google.maps.LatLng(16.010208, -61.596602),
    zoom: 16,
    MapTypeId: google.maps.MapTypeId.HYBRID
  }
  var cart = new google.maps.Map(document.getElementById("carte"), carteOptions);
}