google.charts.load('current', { 'packages': ['table'] });
google.charts.setOnLoadCallback(drawTable);

function drawTable() {
    var values = [
        $value_here$
    ]

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Username');
    data.addColumn('string', 'User Id');
    data.addColumn('string', 'Group Id');
    data.addColumn('string', 'Descripcion');
    data.addColumn('string', 'Home');
    data.addColumn('string', 'Shell');
    data.addRows(values);

    var table = new google.visualization.Table(document.getElementById('table_div'));

    google.visualization.events.addListener(table, 'select', function () {
        console.log(values[table.getSelection()[0].row]);
        var modal = $('#modalUsuario');
        modal.modal('show');
        modal.on('hidden.bs.modal', function (e) {
            location.reload()
        });
    });

    table.draw(data, { showRowNumber: true, width: '100%', height: '100%' });
}