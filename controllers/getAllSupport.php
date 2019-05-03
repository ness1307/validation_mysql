<?php

$pdo = new PDO('mysql:host=localhost; dbname=Media', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('SELECT * FROM support');
$stmt->execute();
$list = $stmt->fetchALL(PDO::FETCH_ASSOC);