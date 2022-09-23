// Map settings
var map = L.map(document.getElementById('map'), {
  center: [-30.00391, -51.18230],
  zoom: 11
});
// Open street layer
var mapLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 18,
  foo: 'bar',
  attribution: '© OpenStreetMap'
});

// Add layer to map
mapLayer.addTo(map);