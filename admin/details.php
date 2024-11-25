<?php
ob_start();
$ref = $_GET['ref'];
require_once "../classes/CRUDAppartement.php";
require_once "../classes/Appartement.php";

$crud = new CRUDAppartement();
$app = $crud->RecuppererApp($ref);
$appartement = new Appartement($app[0][0], $app[0][1], $app[0][2], $app[0][3], $app[0][4], $app[0][7]);
?>
<div class="container mt-5">
    <h1 class="text-center">dtails d'un Appartement</h1>
    <table class="table mt-4">
        <tr>
            <th>Reference</th>
            <td><?= $appartement->reference ?></td>
        </tr>
        <tr>
            <th>Proprietaire</th>
            <td><?= $appartement->proprietaire ?></td>
        </tr>
        <tr>
            <th>Localite</th>
            <td><?= $appartement->localite ?></td>
        </tr>
        <tr>
            <th>Nombre de pieces</th>
            <td><?= $appartement->nbPieces ?></td>
        </tr>
        <tr>
            <th>Domaine d'usage</th>
            <td><?= $appartement->domaineUsage ?></td>
        </tr>

        <tr>
            <th>Surface commune</th>
            <td><?= $appartement->surfaceCommune ?></td>
        </tr>
    </table>
</div>
<?php
$contenu = ob_get_clean();
$titre = "Appartement Details";
include "layout.php";
?>