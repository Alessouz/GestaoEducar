<style>
    .schedule-table th,
    .schedule-table td {
        text-align: center;
        vertical-align: middle;
    }

    .schedule-table .class-cell {
        height: 100px;
    }

    .scrollable-container {
        overflow-y: auto;
        max-height: 600px;
    }

    h3 {
        color: var(--title-color);
    }
</style>

<div class="view-container d-flex flex-column">
    <h3 class="text-center mt-3">Sala / Turma: 3c</h3>

    <div class="container mt-3">
        <div class="scrollable-container">
            <table class="table table-bordered schedule-table" id="horario-tabela"
                <thead class="thead-light">
                    <tr>
                        <th>Horário</th>
                        <th>Seg</th>
                        <th>Ter</th>
                        <th>Qua</th>
                        <th>Qui</th>
                        <th>Sex</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>07:20</td>
                        <td data-id="16" class="class-cell"></td>
                        <td data-id="11" class="class-cell"></td>
                        <td data-id="2" class="class-cell"></td>
                        <td class="class-cell">Ed. Física - Pedro</td>
                        <td class="class-cell">Geografia - Fabiana</td>
                    </tr>
                    <tr>
                        <td>08:10</td>
                        <td class="class-cell">Português - Valéria</td>
                        <td data-id="2" class="class-cell"></td>
                        <td class="class-cell">Português - Valéria</td>
                        <td class="class-cell">Português - Valéria</td>
                        <td class="class-cell">Fisica - Cinthia</td>
                    </tr>
                    <tr>
                        <td>09:00</td>
                        <td class="class-cell">Fisica - Cinthia</td>
                        <td data-id="2" class="class-cell"></td>
                        <td class="class-cell">História - história</td>
                        <td class="class-cell">Geografia - Fabiana</td>
                        <td class="class-cell">Português - Valéria</td>
                    </tr>
                    <tr class="bg-light">
                        <td colspan="6" class="text-center">Intervalo: 00:20</td>
                    </tr>
                    <tr>
                        <td>10:10</td>
                        <td data-id="2" class="class-cell"></td>
                        <td class="class-cell">Português - Valéria</td>
                        <td class="class-cell">História - história</td>
                        <td class="class-cell">Informática - William</td>
                        <td class="class-cell">Espanhol - Luli</td>
                    </tr>
                    <tr>
                        <td>11:00</td>
                        <td data-id="2" class="class-cell"></td>
                        <td class="class-cell">Português - Valéria</td>
                        <td class="class-cell">Arte - Fabinho</td>
                        <td class="class-cell">Inglês - Marcos</td>
                        <td class="class-cell">Espanhol - Luli</td>
                    </tr>
                    <tr>
                        <td>11:50</td>
                        <td class="class-cell">Arte - Fabinho</td>
                        <td class="class-cell">História - Historia</td>
                        <td class="class-cell">Fisica - Cinthia</td>
                        <td class="class-cell">Filosofia - Monica</td>
                        <td class="class-cell">Inglês - Marcos</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="../painelAluno/assets/js/disciplinas.js"></script>