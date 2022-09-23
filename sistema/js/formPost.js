$('#createOrderForm').submit(function (e) {

  e.preventDefault;

  e_cliente = $('#client-select').val();
  e_entregador = $('#fleet-select').val();
  e_coleta = $('#enderecoColeta').val();
  e_entrega = $('#enderecoEntrega').val();



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
  }).done(function (result) {

    alert(result);
  })

})
