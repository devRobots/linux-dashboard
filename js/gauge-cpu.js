google.charts.load('current', { 'packages': ['gauge'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

	var data = google.visualization.arrayToDataTable([
		['Label', 'Value'],
		['1 minuto', 34.250000],
        ['5 minuto', 90.000000],
        ['15 minuto', 123.500000]
	]);

	var options = {

		width: 400, height: 120,
		redFrom: 90, redTo: 100,
		yellowFrom: 75, yellowTo: 90,
		minorTicks: 5
	};

	var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

	chart.draw(data, options);

}