<?php
class Immobilier
{
    public $reference;
    public $proprietaire;
    public $localite;
    public $nbPieces;
    public $domaineUsage;
    

    public function __construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage)
    {
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
       
    }

    /**
     * Get the value of reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     */
    public function setReference($reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     */
    public function setProprietaire($proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get the value of localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set the value of localite
     */
    public function setLocalite($localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get the value of nbPieces
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * Set the value of nbPieces
     */
    public function setNbPieces($nbPieces): self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get the value of domaineUsage
     */
    public function getDomaineUsage()
    {
        return $this->domaineUsage;
    }

    /**
     * Set the value of domaineUsage
     */
    public function setDomaineUsage($domaineUsage): self
    {
        $this->domaineUsage = $domaineUsage;

        return $this;
    }

    
}
?>
