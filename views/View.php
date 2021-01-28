<?php

class view
{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view'.$action.'.php';
    }

    //methode qui génère la vue
    //données que l'on recup pour les mettre dans la vue    
    /**
     * Method generate qui génère et affiche la vue
     *
     * @param $data $data=data que l'on injecte
     *
     * 
     */
    public function generate($data)
    {
        //partie spécifique de la vue
        $content = $this->generateFile($this->_file, $data);
        //template
        $view = $this->generateFile('views/template.php', array('t'=> $this->_t,'content'=>$content));

        echo $view;
    }
    //entre le nom du fichier et les données à recup    
    /**
     * Method generateFile = génère un fichier vue et renvoie le resultat produit
     *
     * @param $file $file [explicite description]
     * @param $data $data [explicite description]
     *
     * @return void
     */
    private function generateFile($file, $data)
    {
        //si fichier existe on extract les données 
        if(file_exists($file))
        {
            //extract toutes les annonces
            extract($data);
            //temporisation declenche la mise en tampon
            ob_start();
            require $file;
            //arrête la temporisation et renvoie le tampon de sortie
            return ob_get_clean();

        }else{
            throw new Exception('Fichier '.$file.' introuvable');
        }
    }

}