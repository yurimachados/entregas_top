
// Popular o select do entregador com os entregadores cadastrados no banco de dados
$.ajax({
  url: 'http://localhost/entregas_top/sistema/populaEntregador.php',
  method: 'GET',
  dataType: 'json',
  success: function (result) {

    //console.table(result)

    $(result).each(function (i, fleet) {

      // Cria uma option para cada entregador do array
      $('#fleet-select').append('<option value="' + fleet.id_entregador + '">' + fleet.entregador_nome + '</option>');
      
    // console.table(fleet.id_entregador)
    // console.log(fleet.entregador_nome)

  })
    }
  });


// Popula o select do cliente com os clientes cadastrados no banco de dados
$.ajax({
  url: 'http://localhost/entregas_top/sistema/populaCliente.php',
  method: 'GET',
  dataType: 'json',
  success: function (result) {

    //console.table(result)
    // Cria uma option para cada cliente do array
    $(result).each(function (i, client) {
      // Cria uma option para cada cliente do array
      $('#client-select').append('<option value="' + client.id_cliente + '">' + client.cliente_nome + '</option>');

      // console.log(client.id_cliente)
      // console.log(client.cliente_nome)
    })
  }
})