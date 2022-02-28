<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<h6 class="error">¡Ups, tu usuario o contraseña son incorrectos!</h6>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            echo '<h6 class="success">Has iniciado sesión;  te redireccionamos a la página principal</h6>';
            setcookie("loggedin", "".$_POST['username']."", time()+(3600 * 24));
            echo "<h6>Bienvenido ".$_POST['username']."</h6><br>";
            header('Location: index.php');
           /* echo "Continue to the <a href=members.php>members</a> section."; */
        } else {
            echo '<h6 class="error">Ups, tu usuario o contraseña son incorrectos!</h6>';
        }
    }
}
 
?>
<div>
    <div>
<head> 
    <title>Bienvenido a Bibilioteca Comunitaria Yolotepec</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="script.js" language="Javascript"></script>  
</head>
<form method="post" action="" name="signin-form">   
<label>¡Bienvenido!</label>
<h2> Inicio de sesión </h2>
 <div>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" placeholder="Usuario" required />
        <input type="password" name="password" placeholder="Contraseña" required />
    <button type="submit" name="login" value="login">Iniciar Sesión</button>
    <p class="message">¿No registrado? <a href="register.php">Registrese</a></p>
</form>
</div>