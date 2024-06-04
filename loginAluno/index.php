<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Educar+ Login</title>
    <script src="../assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="main-container">
        <div class="fundo">
            <h1>Educar+</h1>
        </div>
        <main class="form-container">
            <h1>Faça login</h1>
            <p>Bem vindo, aluno(a)</p>
            <form id="loginForm">
                <div class="form-floating mb-3">
                    <input id="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input id="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-success mt-3" onclick="loginAluno()">Login</button>
            </form>
            <div class="d-flex flex-column text-center">
                <span class="mt-2">Professor ou Funcionario? <a href="../loginGestao/index.php">Faça login aqui</a></span>
                <span class="mt-2">Não possui cadastro? <a href="#">Cadastre-se aqui</a></span>
            </div>
        </main>
    </div>

    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>