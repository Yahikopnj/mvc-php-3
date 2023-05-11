<?php

/**le use sert a dire ce que routere dois aller chercher  */

use App\Controller\UserController;


/** le require autoloader sert a ne pas répéter le require car le fichier autoloader s'en occuper */
require_once("../autoloader.php");


/** le if sert a a vérifier que c'est le bon lien exemple route=delete */

if(isset($_GET["route"])){

    if($_GET["route"] == "all"){
        UserController::all();
    }else if($_GET["route"]=="read"){
        UserController::readById($_GET["id_user"]);
    }
    else if($_GET["route"] == "create"){
        UserController::create($_POST);
    }
    else if($_GET["route"]== "delete"){
        UserController::delete($_GET["id_user"]);
    }
}


?>