<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    setcookie("loggedin", "".$_POST['username']."", time()+(3600 * 24));
    echo "<h6>Bienvenido ".$_POST['username']."</h6><br>";
    exit;
} else {
    // Show users the page!
}
?>
<head> 
    <title>Bienvenido a Bibilioteca Comunitaria Yolotepec</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="script.js" language="Javascript"></script>  
</head>
<header> Huevo  </header>
<p class="message">Termine la sesión <a href="logout.php">Aqui</a></p>
