<?php

class Operation
{
  private $montant;
  private $sens;
  private $commentaire;


  public function __construct($montant, $commentaire)
  {

    if ($montant < 0) {
      $this->sens = "débit";
    } else {
      $this->sens = "crédit";
    }

    $this->montant = $montant;
    $this->commentaire = $commentaire;

  }

  //======= getteur setteur montant =========//

  public function getMontant() {
    return $this->montant;
  }

  public function setMontant($montant){
    $this->montant = $montant;
  }


  //======= getteur setteur sens =========//

  public function getSens() {
    return $this->sens;
  }

  public function setSens($sens){
    $this->sens = $sens;
  }


  //======= getteur setteur commentaire =========//

  public function getCommentaire() {
    return $this->commentaire;
  }

  public function setCommentaire($commentaire){
    $this->commentaire = $commentaire;
  }
}


