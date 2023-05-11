<?php
namespace App\Controller;
use App\model\User;
require("../autoloader.php");
class UserController{

/**c'est la function qui sert a rappeler le param dans le router */
public static function all(){
    $users = User::findAll();
    require("../View/ReadAllUsers.php");
}

public static function readById($id_user){
    $user = User::findById($id_user);
    require("../View/Read.php");
}

public  static function create($post){
    $user=  new User($post["lastname"], $post["firstname"], $post["email"], $post["password"], $post["birthday"],false);
    $user->insert();
    self::all();
 }
 public static function delete($id_user){
    $user = user::deleteid($id_user);
    self::all();

 }

}

?>





