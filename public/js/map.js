

var map = L.map('map').setView([45.79278, 24.15207], 13); // координаты города СИбиу

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

L.marker([45.79278, 24.15207]).addTo(map)
    .openPopup();
