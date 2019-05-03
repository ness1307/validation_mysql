<?php

$pdo = new PDO('mysql:host=localhost; dbname=Media', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('SELECT * FROM support WHERE id=:id');
$stmt->execute();
$list = $stmt->fetch(PDO::FETCH_ASSOC);