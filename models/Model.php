<?php

abstract class Model
{
 private static $_bdd;

 //instancie la connexion à la bdd
 private static function setBdd()
 {
     self::$_bdd = new PDO('mysql:host=localhost;dbname=bg_taverne;charset=utf8','root','');
     self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
 }

 //récupère la connexion à la bdd
 protected function getBdd()
 {
     if(self::$_bdd == null ){
         self::setBdd();
         return self::$_bdd;
     }
 }

//methode pour recup toputes les données d'une table
 protected function getAll($table, $obj)
 {
    $var = [];
    $request= self::$_bdd->prepare('SELECT * FROM ' .table. ' ORDER BY id desc');
    $request->exxecute();

    while($data = $request->fetch(PDO::FETCH_ASSOC))
    {
        $var[]= new $obj($data);
    }
    return $var;
    $request->closeCursor();
 }

} 