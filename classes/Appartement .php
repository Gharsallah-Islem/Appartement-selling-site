<?php
class Appartement
{
    public $reference;
    public $proprietaire;
    public $localite;
    public $nbPieces;
    public $domaineUsage;
    public $surfaceCommune;

    public function __construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $surfaceCommune)
    {
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
        $this->surfaceCommune = $surfaceCommune;
    }
}
?>
