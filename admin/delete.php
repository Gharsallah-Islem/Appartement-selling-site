<?php
require_once "../classes/CRUDAppartement.php";
$ref = $_GET['ref'];
$crud = new CRUDAppartement();
$res = $crud->SupprimerApp($ref);
if ($res) {
    header("location:all.php");
} else {
    echo "Probleme de suppression !!";
}
