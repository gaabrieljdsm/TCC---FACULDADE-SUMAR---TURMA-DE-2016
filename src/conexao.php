<?php


define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA','');
define('DB', 'cadastro');


$conexao =mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivél conectar');
$nome = $_POST["nome_cad"];
$email = $_POST["email_cad"];
$senha = $_POST["email_cad"];

$sql = "INSERT INTO Students (id, nome, email, senha) VALUES (,'$nome','$email', '$senha')";


