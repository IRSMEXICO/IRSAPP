<?php
session_start();

$rol=$_SESSION['rol'];
if($rol == "1"){
    header("location: ../views/admin.php");
}
else if($rol == "2"){
    header("location: ../views/admin.php");
}
else if($rol == "3"){
    header("location: ../views/admin.php");
}
else if($rol == "4"){
    header("location: ../views/admin.php");
}
else if($rol == "5"){
    header("location: ../views/usuario.php");
}
else if($rol == "6"){
    header("location: ../views/inspector.php");
}
?>