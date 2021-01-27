<?php

class AnnonceManager extends Model
{
 public function getAnnonces()
 {
     $this->getBdd();
     //table annonce et l'objet de getAll de model
     //objet = Annonces.php

     return $this->getAll('annonce', 'Annonces');
 }
}