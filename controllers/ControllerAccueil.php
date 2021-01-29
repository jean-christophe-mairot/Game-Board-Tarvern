<?php
require_once('views/View.php');
class ControllerAccueil
{
    private $_annonceManager;
    private $_view;



    public function __construct($url)
    {
        $url=[];
        // if(isset($url) && count($url)>1)
        if(isset($url) && count($url)>1)
        {
            throw new Exception('page introuvable');
        }else{
            $this->annonces();
        }
    }
    private function annonces()
    {
        $this->_annonceManager = new AnnonceManager;
        $annonces = $this->_annonceManager->getAnnonces();

        // require_once('views/accueil.view.php');
        $this->_view= new View('Accueil');
        $this->_view->generate(array('annonces'=>$annonces));
    }
}