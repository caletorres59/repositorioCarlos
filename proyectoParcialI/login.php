<?php

$nombre = $_POST['usuario'];
$pass = $_POST['password'];

if ($nombre == "carlos" && $pass == "cale")
{
   
    include 'registroU.html';
}else
{
    echo 'usuario no existe';
}

