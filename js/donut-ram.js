google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['MB', 'Porcentaje'],
        ['Usada: 2656300', 67.15581727186034],
		['Libre: 1299128', 32.84418272813966]
    ]);

    var options = {
        title: 'Uso de Memoria RAM',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}