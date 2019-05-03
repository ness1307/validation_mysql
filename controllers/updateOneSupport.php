<?php
$pdo = new PDO('mysql:host=localhost; dbname=Media', 'root', '0000', array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));)
$stmt = $pdo->prepare('UPDATE books SET cd=:cd, dvd=:dvd, books=:books WHERE id=:id');
$stmt->bindParam(':cd', $_POST['cd']);
$stmt->bindParam(':dvd', $_POST['dvd']);
$stmt->bindParam(':books', $_POST['books']);
$stmt->bindParam(':id', $_POST['id']);

$stmt->execute();

header('Location: /liste.php');