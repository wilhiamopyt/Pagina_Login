<?php

if(isset($_POST['usuario'])&&!empty($_POST['usuario'])&&isset($_POST['senha'])&&!empty($_POST['senha'])){
    require 'conexao_bd2.php';
    require 'usuario.class.php';
    $u = new Usuarios();
    $usuario=($_POST['usuario']);
    $senha=($_POST['senha']);

   if( $u->login($usuario,$senha)==true){
       
       if(isset($_SESSION['user'])){
        header("location: index.php"); 
       }
       else{
        header("location: login.php");
       }
   }

}
else{

    header("location: login.php");
}

?>