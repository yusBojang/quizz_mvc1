<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            $login = $_POST['login'];
            $password = $_POST['password'];
            connexion($login,$password);
        }

    }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            require_once(PATH_VIEWS."securite/connexion.html.php");
        }

    }else{
        
    }
}

 //us1

 function connexion(string $login,string $password):void{
     $error=[];
     //champ_obligatoire('login',$login,$error);
    if(count($error)==0){
        valid_email('login',$login,$error);
    }
    //champ_obligatoire('password',$password,$error);

    if(count($error)==0){
        //
        $user = find_user_login_password($login ,$password);

        if(count($user)!=0){
            //utilisateur existe
            $_SESSION[KEY_USER_CONNECT]=$user;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }else{
            //utilisateur nexiste pas
            $error['connexion']="login ou mdp incorrecte";
            $_SESSION[KEY_ERRORS]=$error;
            header("location:".WEB_ROOT);
            exit();
        }
       
    }else{
        //erreur de validation
        $_SESSION[KEY_ERRORS]=$error;
        header("location:".WEB_ROOT); 
        exit();
    }
 }
 
 function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
    $errors[$key]=$message;
    }
    }
    
    
    function valid_email(string $key,string $data,array $error,string $message="email invalid"){
        if(!filter_var($data , FILTER_VALIDATE_EMAIL )){
            $error[$key] = $message;
        }
    
    }
    