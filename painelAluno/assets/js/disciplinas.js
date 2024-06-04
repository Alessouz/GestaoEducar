function notaHorario() {
    $.getJSON("../api/disciplinas.php", function(data) {
        $.each(data, function(index, item) {

            // var $celula = $('#' + item.id);
            var $celula = $('.class-cell[data-id="' + item.id + '"]');
            var id = item.id;
            var materia = item.materia;
            var professor = item.professor || '';

            $celula.text(materia + ' - ' + professor);
            // console.log(id, materia, professor);
        });

        // console.log(data);
    })
}

notaHorario();