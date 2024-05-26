<?php

define('HOST', 'localhost'); //nome da máquina
define('USER', 'root'); // nome do usuário
define('PASS', ''); //senha do usuário
define('BASE', 'projeto_2024'); // nome da base de dados

$conn = new MySQLi (HOST, USER, PASS, BASE);
?>