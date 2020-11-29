google.charts.load('current', { 'packages': ['treemap'] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Ubicacion', 'Parent', 'Espacio Disponible', 'Espacio Usado'],
        ['Disco', null, 0, 0],
        $value_here$
    ]);

    tree = new google.visualization.TreeMap(document.getElementById('chart_disk'));

    tree.draw(data, {
        minColor: '#f00',
        midColor: '#ddd',
        maxColor: '#0d0',
        headerHeight: 15,
        fontColor: 'black',
        showScale: true
    });

}