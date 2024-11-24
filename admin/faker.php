<?php
require_once "../config.php";

$connexion = new connexion();
$pdo = $connexion->getConnexion();
$pdo->exec("DELETE FROM immobilier");
$sql = "";

$proprietaires = ["Omar Jlassi", "Adel mekni", "Mouhamed fourach", "islem Gharsallah"];
$localites = ["Tunis", "Ariana", "Ben Arous", "Manouba", "Nabeul", "Zaghouan", "Bizerte", "Beja", "Jendouba", "Kef", "Siliana", "Sousse", "Monastir", "Mahdia", "Sfax", "Kairouan", "Kasserine", "Sidi Bouzid", "Gabes", "Mednine", "Tataouine", "Gafsa", "Tozeur", "Kebili"];
$domaineUsages = ["Bureau", "Domicille"];
$nature = ["Appartement", "Villa"];

for ($i = 1; $i < 110; $i++) {
    $ref = "$i";
    $prop = $proprietaires[array_rand($proprietaires)];
    $loc = $localites[array_rand($localites)];
    $nb = rand(1, 10);
    $dom = $domaineUsages[array_rand($domaineUsages)];
    $nat = $nature[array_rand($nature)];
    $sc = rand(1, 100) + rand(0, 99) / 100;
    $sql .= "INSERT INTO immobilier (reference, proprietaire, localite, nbPieces, domaineUsage, nature, surfaceCommune) VALUES ($ref, '$prop', '$loc', $nb, '$dom', '$nat', $sc); ";
}

$res = $pdo->exec($sql);
if ($res) {
    echo "success";
} else {
    echo "failed";
}
?>
