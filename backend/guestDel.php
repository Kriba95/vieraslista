<?php 

  session_start(); 

  $username = $_SESSION["username"];

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: kirjaudu_error.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: kirjaudu_error.php");
  }



$id = $_GET['id'];


include_once 'guestConnect.php';

if ($username == "admin") {

    try {
        $stmt = $conn->prepare("DELETE FROM viestitb WHERE id = :id;");
            $stmt->bindParam(':id', $id);

            if ($stmt->execute() == false){
                $dataM = array(
                    'error' => 'virhee'
                );
            } else {
                $dataM = array(
                    'succes' => 'Onnistui'
                );
                
            }

    } catch (PDOException $e) {
        $dataM = array(
            'error' => 'virhee'
        );
    }

    header('Content-Type', 'application/x-www-form-urlencoded');
    echo json_encode($dataM);

} else
  header("location: ../login/index.php");
