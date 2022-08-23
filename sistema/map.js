var map = L.map(document.getElementById('map'), {
    center: [-30.00391, -51.18230],
    zoom: 13
  });

  var mapLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 30,
    foo: 'bar',
    attribution: '© OpenStreetMap'
  });

  mapLayer.addTo(map);