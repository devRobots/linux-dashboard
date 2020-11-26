google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['MB', 'Porcentaje'],
		['Usada: 2208492k', 55.904396427775865],
		['Libre: 1741988k', 44.095603572224135]
	]);

	var options = {
		is3D: true,
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
	chart.draw(data, options);
}