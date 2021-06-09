<?php


include_once 'guestConnect.php';


try {
    $stmt = $conn->prepare("SELECT id, username, milloin, viesti FROM viestitb");

    if ($stmt->execute() == false){
        die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
    } else {
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $kommentData = $result;
    }
} catch (PDOException $e) {
    $kommentData = array(
        'error' => 'virhee'
    );
}



header("Content-type: application/json;charset=utf-8");

echo json_encode($kommentData);