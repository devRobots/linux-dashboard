google.charts.load('current', { 'packages': ['table'] });
google.charts.setOnLoadCallback(drawTable);

function drawTable() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Nombre');
    data.addColumn('string', 'Id');
    data.addColumn('string', 'GroupId');
    data.addColumn('string', 'descripcion');
    data.addColumn('string', 'Home');
    data.addColumn('string', 'Shell');
    data.addRows([
        $value_here$
    ]);

    var table = new google.visualization.Table(document.getElementById('table_div'));

    table.draw(data, { showRowNumber: true, width: '100%', height: '100%' });
}