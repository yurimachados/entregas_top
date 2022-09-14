$(document).ready(function () {

    console.log('OK');
        
    $.ajax({
      url: 'http://localhost/entregas_top/sistema/testes.php',
      method: 'GET',
      dataType: 'json',
      sucess: function (data){
        console.log(data);
      }
    });
  



  })