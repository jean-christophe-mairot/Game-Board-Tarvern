<?php

class Router
{
    private $_controller;
    private $_view;

    public function routeRequest()
    {
        try
        {
            //detecte le nom de l'instance de class et le load le .php
            spl_autoload_restister(function($class){
                //si detecte .php par rapport au param $class il va inclure
                //directement le fichier php
                require_once('models/'.$class.'.php');
            });
            //si il y un param get url
            if(isset($_GET['url']))
            {
                //explode recupe tous les param séparé de l'url
                //FILTER_SANITIZE_URL =filtre pour securiser ce qu l'on recup
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                // la première lettre en majuscule et le reste en minuscule en partant 
                //de 0 premier paramètre
                $controller = ucfirst(strtolower($url[0]));
                //le nom du Controller commencant par Controller 
                //suivi du nom avec la première lettre en majuscule
                $controllerClass = "Controller".$controller;
                //dans le dossier controllers 
                $controllerFile = "Controllers/".$controllerClass.".php";
                //si le controller existe dans le dossier controllers
                if(file_exists($controllerFile))
                {
                    require_once($controllerFile);
                    $this->_controller= new $controllerClass($url);
                }
                else {
                    throw new Exception('page introuvable'); 
                }
               
            }else{
                //controller par defaut qui est chargé
                require_once('controllers/ControllerAccueil.php');
                $this->_controller = new ControllerAccueil($url);
            }
        }
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            require_once('views/error.view.php');
        }
    } 
}