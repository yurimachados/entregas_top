$('#newClient').submit(function (e) {

    e.preventDefault();

    var c_client = $('#user').val();
    var c_address = $('#address').val();
    var c_phone = $('#phone').val();
    var c_email = $('#email').val();
    var c_password = $('#password').val();

    //console.log(user, address, phone, email, password);

    $.ajax({
        url: 'http://localhost/entregas_top/sistema/cliente/inserir.php',
        method: 'POST',
        data: {
            client: c_client,
            address: c_address,
            phone: c_phone,
            email: c_email,
            password: c_password
        },
        dataType: 'json'
    }).done(function (result) {
        $('#user').val('');
        $('#address').val('');
        $('#phone').val('');
        $('#email').val('');
        $('#password').val('');
        console.log(result);
    });
});