<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once("db.php");
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = '$id'";
    $result = $mysql->query($query);

    if ($mysql->affected_rows > 0){
        if ($result === TRUE){
            echo "EL USUARIO SE ELIMINO CORRECTAMENTE";
        }
    }else{
        echo "NO HAY LISTAS";
    }

    $mysql->close();
}
