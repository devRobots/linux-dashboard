google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['MB', 'Porcentaje'],
        ['Usada: 2404412', 60.863793766833396],
		['Libre: 1546068', 39.136206233166604]
    ]);

    var options = {
        title: 'Uso de Memoria RAM',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}