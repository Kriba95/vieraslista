<?php
try {
    $conn=new PDO('mysql:dbname=registration;host=localhost','root',''); 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}