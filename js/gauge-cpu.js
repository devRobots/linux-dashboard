google.charts.load('current', { 'packages': ['gauge'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

	var data = google.visualization.arrayToDataTable([
		['Label', 'Value'],
		['1 minuto', 12.600000],
        ['5 minuto', 13.000000],
        ['15 minuto', 17.700000]
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