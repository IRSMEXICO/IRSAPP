<html>
    <!--AMERICO CARDENAS ROCHA-->
    <!--VISTA LOGIN-->
<head>
    <title>Login | IRS</title>
    <link href="<?=base_url();?>assets/css/master.css" rel="stylesheet">
	
</head>

<body>

    <div class="login-box">
        <img class="avatar" src="<?=base_url();?>assets/img/irs.png" alt="Logo de IRS">
        <h1>Ingresar</h1>

        <form method="post" action="<?php echo base_url('index.php/login/login');?>">
            <!--Usuario-->
            <label for="usuario">Usuario</label>
            <input type="text" name="username" placeholder="Ingresa el usuario" autocomplete="ÑÖcompletes">

            <!--Contraseña-->
            <label for="password">Clave</label>
            <input type="password" name="password" placeholder="Ingresa la clave" autocomplete="ÑÖcompletes">

            <input type="submit" value="Entrar"/>

            <a href="#">Olvidaste tu clave?</a>
        </form>
    </div>
</body>

</html>