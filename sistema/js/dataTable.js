$(document).ready(function () {

    var table = $('#orderTable').DataTable({
        "processing": true,
        "serverside": true,
        "ajax": {
            "url": 'http://localhost/entregas_top/sistema/datatable_data.php',
            "type": 'POST',
        },
    });
});