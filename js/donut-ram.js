google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['MB', 'Porcentaje'],
        ['Usada: 2434160', 61.616816184362406],
		['Libre: 1516320', 38.383183815637594]
    ]);

    var options = {
        title: 'Uso de Memoria RAM',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}