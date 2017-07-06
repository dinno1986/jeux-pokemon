<?php
require_once 'carte.php';
require_once 'namecard.php';
require_once 'typedresseur.php';


/**
 * class dresseur
 * 
 */
class dresseur extends carte
{
  private $_namecard;
  private $_typedresseur;


function __construct($namecard,$typedresseur){
      $this->_namecard = $_namecard;
      $this->_typedresseur = $_typedresseur;
    

    
    }




}




?>
