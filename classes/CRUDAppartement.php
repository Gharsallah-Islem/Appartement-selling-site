<?php
include_once '../config.php';
include_once 'Immobilier.php';
class CRUDAppartement
{
    private $pdo;
    function __construct()
    {
        $con = new connexion();
        $this->pdo = $con->getConnexion();
    }
   

    function AjouterApp(Appartement $appartement)
    {
        $ch = "Appartement";
        $sql = "INSERT INTO immobilier VALUES($appartement->reference,'$appartement->proprietaire','$appartement->localite',$appartement->nbPieces,'$appartement->domaineUsage','$ch',NULL,$appartement->surfaceCommune)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function RecuppererApp($reference)
    {
        $sql = "SELECT * FROM immobilier WHERE reference=$reference";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    function ModifierApp(Appartement $appartement)
    {
        $ch = "Appartement";
        $sql = "UPDATE immobilier SET proprietaire='$appartement->proprietaire',localite='$appartement->localite',nbPieces=$appartement->nbPieces,domaineUsage='$appartement->domaineUsage',nature='$ch',surfaceCommune=$appartement->surfaceCommune WHERE reference=$appartement->reference";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function SupprimerApp($reference)
    {
        $sql = "DELETE FROM immobilier WHERE reference=$reference";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ListerApp()
    {
        $sql = "SELECT * FROM immobilier";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
