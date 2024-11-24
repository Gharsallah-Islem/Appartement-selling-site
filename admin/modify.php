<?php
ob_start();
?>
<div class="container mt-5">
    <h1 class="text-center">Modifier un Appartement</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-4">
        <input type="hidden" name="reference" value="<?= $appartement[0] ?>">
        <div class="mb-3">
            <label for="proprietaire" class="form-label">Propriétaire</label>
            <input type="text" class="form-control" id="proprietaire" name="proprietaire" value="<?= $appartement[1] ?>" required>
        </div>
        <div class="mb-3">
            <label for="localite" class="form-label">Localité</label>
            <input type="text" class="form-control" id="localite" name="localite" value="<?= $appartement[2] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nbPieces" class="form-label">Nombre de pièces</label>
            <input type="number" class="form-control" id="nbPieces" name="nbPieces" value="<?= $appartement[3] ?>" required>
        </div>
        <div class="mb-3">
            <label for="domaineUsage" class="form-label">Domaine d'usage</label>
            <input type="text" class="form-control" id="domaineUsage" name="domaineUsage" value="<?= $appartement[4] ?>" required>
        </div>
        <div class="mb-3">
            <label for="surfaceCommune" class="form-label">Surface Commune</label>
            <input type="number" step="0.01" class="form-control" id="surfaceCommune" name="surfaceCommune" value="<?= $appartement[5] ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="ok">Modifier</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<?php
require_once "../config.php";
require_once "../classes/CRUDAppartement.php";
require_once "../classes/Appartement.php";

if (isset($_GET['reference'])) {
    $reference = $_GET['reference'];
    $crud = new CRUDAppartement();
    $appartement = $crud->RecuppererApp($reference);

    if ($appartement) {
        $appartement = $appartement[0];
    } else {
        echo "Appartement not found.";
        exit();
    }
} else {
    echo "No reference provided.";
    exit();
}

if (isset($_POST['ok'])) {
    $reference = $_POST['reference'];
    $proprietaire = $_POST['proprietaire'];
    $localite = $_POST['localite'];
    $nbPieces = $_POST['nbPieces'];
    $domaineUsage = $_POST['domaineUsage'];
    $surfaceCommune = $_POST['surfaceCommune'];

    $appartement = new Appartement($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $surfaceCommune);
    $result = $crud->ModifierApp($appartement);

    if ($result) {
        header("Location: all.php");
        exit();
    } else {
        echo "Failed to modify the appartement.";
    }
}
?>
<?php
$titre = "Modify Appartement";
$contenu = ob_get_clean();
include "layout.php";
?>