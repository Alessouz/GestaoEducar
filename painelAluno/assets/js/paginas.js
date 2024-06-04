$(document).ready(function () {
    $('.icone-lista').click(function () {
        $('.icone-lista').removeClass('ativo');
        $(this).addClass('ativo');
    });
});

let isFirstLoad = true;

function clickAgenda() {
    $('#container').html('Loading...');
    setTimeout(function () {
        $('#container').load('../view/agenda.php');
    }, 500);
}

function loadPrincipal() {
    $('#container').html('Loading...');
    setTimeout(function () {
        $('#container').load('index.php');
    }, 500);
}

function loadNotas(bimester, page) {
    if (isFirstLoad) {
        $('#container').html('<div class="loading">Loading...</div>');
        isFirstLoad = false;
    }
    $.ajax({
        url: '../view/notas.php',
        type: 'GET',
        data: {
            bimester: bimester,
            page: page
        },
        success: function (response) {
            $('#container').html(response);

            $('#bimester').off('change').change(function () {
                let bimester = $(this).val();
                loadNotas(bimester, 1);
            });
        },
        error: function () {
            $('#container').html('<div class="error">Error loading data.</div>');
        }
    });
}

// Função para configurar a paginação e carregar o conteúdo da página via AJAX
function setupPagination() {
    function loadPage(page) {
        $.ajax({
            url: '../view/notas.php',
            type: 'GET',
            data: {
                page: page
            }, // Envie o número da página como parâmetro
            success: function (response) {
                $('#container').html(response);

                // Registre o evento de mudança do bimestre
                $('#bimester').off('change').change(function () {
                    let bimester = $(this).val();
                    loadNotas(bimester, 1);
                });
            },
            error: function () {
                console.error('Erro ao carregar a página');
            }
        });
    }

    $(document).on('click', '.pagination-link', function (e) {
        e.preventDefault();

        var page = $(this).data('page'); // Para obiter o numero da pagina pelo atributo de dados data-page

        loadPage(page);
    });
}

// Chame a função para configurar a paginação quando o documento estiver pronto
$(document).ready(function () {
    setupPagination();
});

function loadHorario() {
    $('#container').html('Loading...');
    setTimeout(function () {
        $('#container').load('../view/horario.php');
    }, 500);
}

function loadDever() {
    $('#container').html('Loading...');
    setTimeout(function () {
        $('#container').load('../view/deveres.php');
    }, 500);
}

function loadProva() {
    $('#container').html('Loading...');
    setTimeout(function () {
        $('#container').load('../view/provas.php');
    }, 500);
}

function loadTrab() {
    $('#container').html('Loading...');
    setTimeout(function () {
        $('#container').load('../view/trabalho.php');
    }, 500);
}