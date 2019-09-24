<?php
session_start();
?>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php
    $us=$_POST["usuario"];
    $cont=$_POST["contrasena"];

include ("../model/acciones.php");
    $rob=new consul();
    $iniciar=$rob->login($us,$cont);
    
foreach ($iniciar as $row){
    $rol = $row['rol'];
}

if(sizeof($iniciar)>0){
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $us;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (600);//tiempo de 600segundos por sesion
    if($rol == "1"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/admin.php");
    }
    else if($rol == "2"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/admin.php");
    }
    else if($rol == "3"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/admin.php");
    }
    else if($rol == "4"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/admin.php");
    }
    else if($rol == "5"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/usuario.php");
    }
    else if($rol == "6"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/inspector.php");
    }
}
else{
    echo'<script type="text/javascript">
    alert("Usuario y/o contraseña incorrectos");
    window.location.href="../";
    </script>';
}
?>