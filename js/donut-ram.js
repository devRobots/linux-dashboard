google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['MB', 'Porcentaje'],
		['Usada: 2640616k', 66.84291529130637],
		['Libre: 1309864k', 33.157084708693624]
	]);

	var options = {
		is3D: true,
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
	chart.draw(data, options);
}