$(document).ready( function () {
      
    var table = $('#orderTable').DataTable({
        paging: true,
        searching: true,
        bFilter: false,
        processing: true,
        serverside: true,
        ajax: {
            url: 'teste.php',
            type: 'POST'
        },
        dom: 'Blfrtip',
        language: {
            lengthMenu: 'Exibir _MENU_ registros por página',
            zeroRecords: 'Nada encontrado',
            info: 'Mostrando página _PAGE_ de _PAGES_',
            infoEmpty: 'Sem registros disponíveis',
            infoFiltered: '(filtrados de _MAX_ total de registros)',
            search: 'Pesquisa: ',
            paginate: { previous: 'Anterior', next: 'Próxima' },
        },
    });


} );