google.charts.load('current', { 'packages': ['table'] });
google.charts.setOnLoadCallback(drawTable);

function drawTable() {
    var values = [
        ['nobody','65534','65534','nobody','/nonexistent','/usr/sbin/nologin',],
		['devrobot','1000','1000','Yesid Rosas Toro','/home/devrobot','/bin/zsh',],
		['yes','1001','1001','asdasd','/home/yes','/bin/bash',],
		
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
    });

    table.draw(data, { showRowNumber: true, width: '100%', height: '100%' });
}