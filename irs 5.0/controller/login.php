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
    $rol = $row['tipo_rol'];
}

if(sizeof($iniciar)==0){
 
    $rob=new consul();
    $iniciar=$rob->login2($us,$cont);
    

    $rol = "Usuario";
}

if(sizeof($iniciar)>0){
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $us;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (600);//tiempo de 600segundos por sesion
    if($rol == "Director"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/admin.php");
    }
    else if($rol == "Gerente"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/admin.php");
    }
    else if($rol == "Supervisor"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/admin.php");
    }
    else if($rol == "Team Leader"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/admin.php");
    }
    else if($rol == "Usuario"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/usuario.php");
    }
    else if($rol == "Operador"){
        $_SESSION['rol'] = $rol;
        header("location: ../views/inspector.php");
    }
    else{
        echo'<script type="text/javascript">
        alert("Rol no existe, dar de alta");
        window.location.href="../";
        </script>'    ;
    }
}
else{
    echo'<script type="text/javascript">
    alert("Usuario y/o contraseña incorrectos");
    window.location.href="../";
    </script>';
}


?>
