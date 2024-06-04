function loginAluno(event) {
    event.preventDefault();

    var email = $("#email").val();
    var password = $("#password").val();

    if (email == "" || password == "") {
        console.log('erro no login');
    } else {
        console.log(email, password);
        $.post("../api/login.php", {email: email, password: password})
            .done(function(result) {
                if (result == 'login sucedido') {
                    window.location.href = "../painelAluno/index.php";
                } else {
                    console.log('Erro no login: ' + result);
                }
            })
    }
}

$("#loginForm").submit(loginAluno);