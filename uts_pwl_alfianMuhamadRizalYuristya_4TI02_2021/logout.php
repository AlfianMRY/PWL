<?php
session_start();
//session_destroy();
unset($_SESSION['MEMBER']);
//landing page
header('Location:http://localhost/PraUTS/index.php?hal=home');   
?>
