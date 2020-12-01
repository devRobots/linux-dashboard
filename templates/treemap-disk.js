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
        minColor: '#0d0',
	midColor: '#7e8',
        maxColor: '#f00',
        headerHeight: 15,
        fontColor: 'black',
        showScale: true
    });

}
