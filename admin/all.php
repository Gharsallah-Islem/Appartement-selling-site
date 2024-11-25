<?php
ob_start();
require_once "../classes/CRUDAppartement.php";
$crud = new CRUDAppartement();
$LesAppartements = $crud->ListerApp();
?>
<div class="container mt-5">
    <table class="table">
        <tr class="table-light">
            <th>Reference</th>
            <th>Proprietaire</th>
            <th>Localite</th>
            <th>Nombre de pieces</th>
            <th>Domaine d'usage</th>
            <th>Nature</th>
            <th>Surface commune</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($LesAppartements as $val) {
        ?>
            <tr>
                <td><?= $val[0] ?></td>
                <td><?= $val[1] ?></td>
                <td><?= $val[2] ?></td>
                <td><?= $val[3] ?></td>
                <td><?= $val[4] ?></td>
                <td><?= $val[5] ?></td>
                <td><?= $val[7] ?></td>
                <td>
                    <a href="modify.php?ref=<?= $val[0] ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a href="delete.php?ref=<?= $val[0] ?>" class="btn btn-danger btn-sm">Supprimer</a>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php
$contenu = ob_get_clean();
$titre = "Appartement List";
include "layout.php";
?>