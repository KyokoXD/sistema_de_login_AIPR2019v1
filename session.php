<?php

session_start();

require_once 'configDB.php';

if(isset($_SESSION['nomeUsuario'])){
    //echo "usuario logado!";
    $usuario = $_SESSION['nomeUsuario'];
    $sql = $conecta->prepare("SELECT * FROM usuario WHERE nomeUsuario = ?");
    
}else{
    //Kick
    header("location: index.php");
}
