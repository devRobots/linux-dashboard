google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['MB', 'Porcentaje'],
		['Usada: 2010244k', 50.886069540916544],
		['Libre: 1940236k', 49.113930459083456]
	]);

	var options = {
		is3D: true,
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
	chart.draw(data, options);
}