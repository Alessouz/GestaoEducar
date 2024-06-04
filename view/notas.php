<?php

include('../api/notas.php');

$bimesters = [1, 2, 3, 4];
$current_bimester = isset($_GET['bimester']) ? (int)$_GET['bimester'] : 1;

$filtered_subjects = array_filter($subjects, function ($subject) use ($current_bimester) {
    return $subject['bimestre'] == $current_bimester;
});

$items_per_page = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$total_subjects = count($filtered_subjects);
$total_pages = ceil($total_subjects / $items_per_page);
$offset = ($page - 1) * $items_per_page;
$paginated_subjects = array_slice($filtered_subjects, $offset, $items_per_page);

?>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .accordion-button {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .subject {
        flex-grow: 1;
        text-align: left;
    }

    .grade {
        flex-grow: 1;
        text-align: right;
    }

    .accordion-body ul {
        list-style-type: none;
        padding: 0;
    }

    .accordion-body ul li {
        padding: 5px 0;
    }

    .accordion-button:focus {
        outline: none;
        box-shadow: none;
    }

    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .small-form {
        max-width: 200px;
        margin-left: auto;
    }

    .spaced-div {
        margin-bottom: 20px;
    }
</style>

<div class="view-container">
    <div class="container" id="nota-container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h3>Suas notas</h3>
                <div id="curso-container">
                    Disciplinas em curso
                </div>
            </div>
            <form id="bimesterForm" class="small-form">
                <div class="form-group">
                    <label for="bimester">Selecione o Semestre:</label>
                    <select id="bimester" name="bimester" class="form-control">
                        <?php foreach ($bimesters as $bimester) : ?>
                            <option value="<?php echo $bimester; ?>" <?php if ($bimester == $current_bimester) echo 'selected'; ?>>
                                <?php echo $bimester; ?>º Semestre
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php foreach ($paginated_subjects as $index => $subject) :
            $headingId = "flush-heading" . ($index + 1 + $offset);
            $collapseId = "flush-collapse" . ($index + 1 + $offset);
        ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                    <button class="accordion-button collapsed" 
                    type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>" 
                    aria-expanded="false" aria-controls="<?php echo $collapseId; ?>">
                        <?php echo $subject["name"]; ?> - Nota: <?php echo $subject["nota"]; ?>
                    </button>
                </h2>
                <div id="<?php echo $collapseId; ?>" class="accordion-collapse collapse" 
                aria-labelledby="<?php echo $headingId; ?>" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <?php if (isset($subject["Professor"]) || isset($subject["professor"])) : ?>
                            <p>
                                Professor(a): <?php echo isset($subject["Professor"]) ? $subject["Professor"] : $subject["professor"]; ?>
                            </p>
                        <?php endif; ?>
                        <ul>
                            <?php
                            foreach ($subject["details"] as $key => $value) {
                                echo "<li>$key: $value</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Paginação -->
    <div class="pagination-wrapper">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php if ($page <= 1) {
                                            echo 'disabled';
                                        } ?>">
                    <a class="page-link" href="#" data-page="<?php echo $page - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <li class="page-item <?php if ($page == $i) { echo 'active'; } ?>">
                        <a class="page-link pagination-link" href="#" data-page="<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php if ($page >= $total_pages) { echo 'disabled'; } ?>">
                    <a class="page-link" href="#" data-page="<?php echo $page + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>