$('#newFleet').submit(function (e) {

    e.preventDefault();

    var e_fleet = $('#user').val();
    var e_email = $('#email').val();
    var e_phone = $('#phone').val();
    var e_password = $('#password').val();

    //console.log(user, address, phone, email, password);

    $.ajax({
        url: 'http://localhost/entregas_top/sistema/entregador/inserir.php',
        method: 'POST',
        data: {
            fleet: e_fleet,
            email: e_email,
            phone: e_phone,
            password: e_password
        },
        dataType: 'json'
    }).done(function (result) {
        $('#user').val('');
        $('#email').val('');
        $('#phone').val('');
        $('#password').val('');
        console.log(result);
    });
});