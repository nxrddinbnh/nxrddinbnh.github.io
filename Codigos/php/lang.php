<?php
session_start();
$_SESSION['lang'] = $_GET['idk'] ?? 'es';
header("Location: ../index.php");
?>