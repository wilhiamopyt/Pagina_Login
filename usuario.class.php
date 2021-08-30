<?php

class Usuarios{
    public function login($usuario,$senha){
        global $db;
        $sql ="SELECT*FROM usuarios WHERE usuario=:usuario AND senha=:senha";
       $sql= $db->prepare($sql);
       $sql->bindValue("usuario",$usuario);
       $sql->bindValue("senha",$senha);
       $sql->execute();
       if ($sql->rowCount()>0){
           $dados=$sql->fetch();
           
           
           $_SESSION['user']=$dados['usuario'];
           return true;
       }
       else{
           return false;
       }
    }


}
?>
