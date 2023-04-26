<?php

$mysql = new mysqli(
    "localhost",
    "root",
    "",
    "android"
);
if ($mysql->connect_error){
    die("FALLO EN LA CONEXION!!" . $mysql->connect_error);

}