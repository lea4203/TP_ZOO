<?php

try {
    $db = new PDO("mysql:host=127.0.0.1;dbname=tp_zoo;charset=utf8","root","");
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}