<?php
class Appartement extends Immobilier
{
    public $surfaceCommune;


    public function __construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $surfaceCommune)
    {
        parent::__construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage);
        $this->surfaceCommune = $surfaceCommune;
    }

}
