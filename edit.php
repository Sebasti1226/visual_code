<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        require_once("db.php");

        $id = $_POST ['id'];
        $name = $_POST ['name'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];

        $query = "UPDATE users SET name = '$name' , email = '$email' , password = '$password' WHERE id = '$id'";
        $result = $mysql->query($query);

        if ($mysql->affected_rows > 0){
            if ($result === TRUE){
                echo "ACTUALIZACION CORRECTA";
            }else{
                echo "Error";
            }
        }else{
            echo "NO HAY LISTAS";
        }
        $mysql->close();
    }