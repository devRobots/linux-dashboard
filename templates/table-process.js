google.charts.load('current', { 'packages': ['table'] });
google.charts.setOnLoadCallback(drawTable);

function drawTable() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'PID');
    data.addColumn('string', 'USER');
    data.addColumn('string', 'PR');
    data.addColumn('string', 'NI');
    data.addColumn('string', 'VIRT');
    data.addColumn('string', 'RES');
    data.addColumn('string', 'SHR');
    data.addColumn('string', 'S');
    data.addColumn('string', '%CPU');
    data.addColumn('string', '%MEM');
    data.addColumn('string', 'TIME+');
    data.addColumn('string', 'COMMAND');

    data.addRows([
        $value_here$
    ]);

    var table = new google.visualization.Table(document.getElementById('table_div'));

    table.draw(data, { showRowNumber: true, width: '100%', height: '100%' });
}