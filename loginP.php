<?php

session_start();
include("conexao.php");

$nome=$_REQUEST["nome"];
$senha=$_REQUEST["senha"];

$sql="SELECT * FROM trabalho_pw WHERE nome = '$nome' AND senha = '$senha'" or die("erro ao selecionar");

$res=$conn->query($sql);

      if ($row = $res->fetch_object()){
        setcookie("login",$login);
        header("Location:index.php");
        
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }

?>