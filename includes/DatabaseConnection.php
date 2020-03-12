<?php
$pdo = new PDO('mysql:host=192.168.10.10;dbname=task;charset=utf8', 'homestead', 'secret');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);