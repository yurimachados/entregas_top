$(document).on('submit', '#createOrderForm', function (e) {

  e.preventDefault;

  e_cliente = $('#client-select').val();
  e_entregador = $('#fleet-select').val();
  e_coleta = $('#enderecoColeta').val();
  e_entrega = $('#enderecoEntrega').val();

  if(e_cliente != '' && e_entregador != '' && e_coleta != '' && e_entrega!= '')
  {
    $.ajax({
      url: 'http://localhost/entregas_top/sistema/criarEntrega.php',
      method: 'POST',
      data: {
        cliente: e_cliente,
        entregador: e_entregador,
        coleta: e_coleta,
        entrega: e_entrega
      },
      dataType: 'json',
      success: function(data){

        let json = JSON.parse(data);
        let status = json.status;
        if (status == 'success')
        {
          table = $('#orderTable').DataTable();
          table.draw();
          alert('Entrega criada com sucesso!')
        }        

      }
    })
  }  
  else
  {
    alert('Por favor, preencha todos os campos para criar a entrega!');
  }
})
