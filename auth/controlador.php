<?php 
if(!empty($_POST["btnlogin"])){
    if(empty($_POST["username"]) and empty($_POST["password"])){
        echo "Campos Vacios";
    }
    else{
        $usuario = $_POST["username"];
        $contraseña = $_POST["password"];
        $sql = $conexion -> query("SELECT * FROM users where user_name='$usuario' and password='$contraseña'");
        if ($datos=$sql->fetch_object()){
            header("location:../indexlogged.php");
        } else {
            echo "No tiene acceso";
        }
    }
}   
?>