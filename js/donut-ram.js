google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['MB', 'Porcentaje'],
        ['Usada: 1940572', 49.122435754642474],
		['Libre: 2009908', 50.877564245357526]
    ]);

    var options = {
        title: 'Uso de Memoria RAM',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}