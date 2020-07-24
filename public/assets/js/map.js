const mymap = L.map('mapid').setView([45.87479782104492, 1.3685379028320312], 9);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

L.marker([45.87479782104492, 1.3685379028320312]).addTo(mymap)
    .bindPopup("<h3>Communauté Emmaüs 87</h3><address>Moulin de la Ribière<br/>87480 Saint-Priest-Taurion</address>");

let circle = L.circle([45.87479782104492, 1.3685379028320312], {
    color: 'e58714',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 40000
}).addTo(mymap);