<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Educar+ Login</title>
    <script src="../assets/js/jquery.js"></script>
    <link rel="shortcut icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container {
            display: flex;
            height: 100vh;
        }

        .fundo {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #28a745;
        }

        .fundo h1 {
            color: #fff;
            font-size: 4.2rem;
        }

        .form-container {
            /* flex: 2; */
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .form-container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-container p {
            margin-bottom: 30px;
            color: #666;
        }

        .form-container .btn {
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
        }

        .form-container .d-flex {
            width: 100%;
            justify-content: center;
            margin-top: 1rem;
        }

        .form-container .d-flex span {
            font-size: 0.875rem;
            color: #666;
        }

        .form-container .d-flex a {
            color: #28a745;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="fundo">
            <h1>GestãoEducar+</h1>   
        </div>
        <main class="form-container">
            <h1>Faça login</h1>
            <p>Bem vindo, Gestor</p>
            <form>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-success mt-3">Login</button>
            </form>
            <div class="d-flex flex-column text-center">
                <span class="mt-2">Aluno? <a href="../index.php">Faça login aqui</a></span>
                <!-- <span class="mt-2">Não possui cadastro? <a href="#">Cadastre-se aqui</a></a></span> -->
            </div>
        </main>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>