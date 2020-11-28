google.charts.load('current', { 'packages': ['table'] });
google.charts.setOnLoadCallback(drawTable);

function drawTable() {
    var values = [
        $value_here$
    ]

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Nombre');
    data.addColumn('string', 'Id');
    data.addColumn('string', 'GroupId');
    data.addColumn('string', 'descripcion');
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