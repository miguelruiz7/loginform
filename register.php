<?php
include('registration.php');
?>
<head> 
    <title>Bienvenido a Bibilioteca Comunitaria Yolotepec</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="script.js" language="Javascript"></script>  
</head>
<form method="post" action="" name="signup-form">
<label>¡Bienvenido!</label>
<h2> Registro </h2>
<div>
        <input type="text" name="username" placeholder="Usuario" pattern="[a-zA-Z0-9]+" required />
        <input type="email" name="email" placeholder="Correo electronico" required />
        <input type="password" name="password" placeholder="Contraseña" required />
    </div>
    <button type="submit" name="register" value="register">Registro</button>
    <p class="message">Si cree que usted está registado <a href="login.php">Inicie sesión</a></p>
</form>

