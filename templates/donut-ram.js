google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['MB', 'Porcentaje'],
		$value_here$
	]);

	var options = {
		is3D: true,
		pieHole: 0.4,
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
	chart.draw(data, options);
}