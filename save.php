<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        require_once("db.php");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email' , '$password')";
        $result = $mysql->query($query);

        if ($result == TRUE){
            echo "EL USUARIO SE CREO EXITOSAMENTE";
        }else{
            echo "Error!!";
        }

        $mysql->close();
    }

    