<?php
ob_start();
?>
<div class="container mt-5">
    <h1 class="text-center">Ajouter un Appartement</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="referance" class="form-label">Réferance</label>
            <input type="text" class="form-control" id="referance" name="referance" required>
        </div>
        <div class="mb-3">
            <label for="proprietaire" class="form-label">Propriétaire</label>
            <input type="text" class="form-control" id="proprietaire" name="proprietaire" required>
        </div>
        <div class="mb-3">
            <label for="localite" class="form-label">Localité</label>
            <input type="text" class="form-control" id="localite" name="localite" required>
        </div>
        <div class="mb-3">
            <label for="nbPieces" class="form-label">Nombre de pièces</label>
            <input type="number" class="form-control" id="nbPieces" name="nbPieces" required>
        </div>
        <div class="mb-3">
            <label for="domaineUsage" class="form-label">Domaine d'usage</label>
            <input type="text" class="form-control" id="domaineUsage" name="domaineUsage" required>
        </div>
        <div class="mb-3">
            <label for="surfaceCommune" class="form-label">Surface Commune</label>
            <input type="number" step="0.01" class="form-control" id="surfaceCommune" name="surfaceCommune">
        </div>
        <button type="submit" class="btn btn-primary" name="ok">Ajouter</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<?php
if (isset($_POST['ok'])) {
    require_once "../classes/CRUDAppartement.php";
    require_once "../classes/Appartement.php";
    $referance = $_POST['referance'];
    $proprietaire = $_POST['proprietaire'];
    $localite = $_POST['localite'];
    $nbPieces = $_POST['nbPieces'];
    $domaineUsage = $_POST['domaineUsage'];
    $surfaceCommune = $_POST['surfaceCommune'];

    $crud = new CRUDAppartement();
    $appartement = new Appartement($referance, $proprietaire, $localite, $nbPieces, $domaineUsage, $surfaceCommune);
    $result = $crud->AjouterApp($appartement);
    

    if ($result) {
        
        header("Location: all.php");
        exit();
    } else {
        echo "Failed to add the appartement.";
    }
}
?>
<?php
$titre = "Adding Appartement";
$contenu = ob_get_clean();
include "layout.php";
?>