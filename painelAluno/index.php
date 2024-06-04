<?php

session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: ../loginAluno/index.php");
    exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Escola do Futuro</title>
    <link rel="shortcut icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
    <script src="../assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/view.css">
    <style>
        #dropdownMenuButton1 {
            border: none;
            background-color: #000;
        }

        #dropdownMenuButton1:hover {
            background-color: #ccc;
        }
    </style>
</head>

<body>

    <header id="header-container" class="d-flex justify-content-between border-bottom border-1 cursor-pointer">
        <div id="logo" class="d-flex" onclick="loadPrincipal()">
            <img id="logoimg" src="assets/img/logo.png" alt="">
            <h1 id="logoh1">Escola do Futuro</h1>
        </div>

        <div id="user-container" class="">
            <div class="dropdown picture-user">
                <div class="btn rounded-circle m-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Aluno</a></li>
                    <li><a class="dropdown-item" href="#">Notificações</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Tema</a></li> -->
                    <li><a class="dropdown-item" href="#">Suporte Online</a></li>
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li><a class="dropdown-item" href="#" onclick="logout()">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div id="main-container">
        <section>
            <div class="">
                <p id="dia">Dia a Dia</p>
                <ol>
                    <li onclick="clickAgenda()" class="d-flex justify-content-between icone-lista">
                        Agenda
                        <img class="icone" src="assets/img/calendar-day-solid.svg" alt="">
                    </li>
                    <li onclick="loadNotas()" class="d-flex justify-content-between icone-lista">
                        Notas
                        <img src="assets/img/notas.svg" alt="" class="icone">
                    </li>
                    <li onclick="loadHorario()" class="d-flex justify-content-between icone-lista">
                        Horario/Aulas
                        <img class="icone" src="assets/img/clock-regular.svg" alt="">
                    </li>
                </ol>
            </div>
            <div class="">
                <p id="atividade">Atividades</p>
                <ol>
                    <li onclick="loadDever()" class="d-flex justify-content-between icone-lista">
                        Deveres
                        <img src="assets/img/livro.png" alt="" class="icone">
                    </li>
                    <li onclick="loadTrab()" class="d-flex justify-content-between icone-lista">
                        Trabalhos
                        <img src="assets/img/maleta.png" alt="" class="icone">
                    </li>
                    <li onclick="loadProva()" class="d-flex justify-content-between icone-lista">
                        Provas
                        <img src="assets/img/pen-solid.svg" alt="" class="icone">
                    </li>
                </ol>
            </div>
            <div class="">
                <p id="turma">Turma</p>
                <ol>
                    <li onclick="" class="d-flex justify-content-between icone-lista">
                        Sua classe
                    </li>
                    <li onclick="" class="d-flex justify-content-between icone-lista">
                        Bate papo
                    </li>
                    <li onclick="" class="d-flex justify-content-between icone-lista">
                        Fale com o professor
                    </li>
                </ol>
            </div>
            <div class="">
                <p id="secretaria">Secretaria</p>
                <ol>
                    <li onclick="" class="d-flex justify-content-between icone-lista">
                        Meus dados
                        <img class="icone" src="assets/img/dados.png" alt="">
                    </li>
                    <li onclick="" class="d-flex justify-content-between icone-lista">
                        Contatos
                        <img src="assets/img/telefone.png" alt="" class="icone">
                    </li>
                    <li onclick="" class="d-flex justify-content-between icone-lista">
                        Protocolo Online
                        <img src="assets/img/protocolo.png" alt="" class="icone">
                    </li>
                </ol>
            </div>
            <!-- <div class="">
                <p id="faltas">Faltas/Ocorrencias</p>
                <ol>
                    <li class="d-flex justify-content-between icone-lista">
                        Faltas
                        <img src="assets/img/calendar-xmark-regular.svg" alt="" class="icone">
                    </li>
                    <li class="d-flex justify-content-between icone-lista">Atrasos</li>
                    <li class="d-flex justify-content-between icone-lista">Ocorrencias</li>
                </ol>
            </div> -->
        </section>

        <main>
            <div id="container" class="container mt-3">
                <h3>Fique por dentro</h3>
            </div>
        </main>
    </div>

    <footer>

    </footer>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/paginas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/9f9c884ad5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>