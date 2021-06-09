<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: kirjaudu_error.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: kirjaudu_error.php");
  }

$json = file_get_contents('php://input'); // Mitä se lähettää (ei käytössä)
$guestData = json_decode($json);



//MUUTTUJAT
if (!isset($_SESSION['username'])){ //jos ei ole kirajutunut
    $username = false;
  } else { 
    $username = $_SESSION['username']; //jos kirjautunut 
  } $milloin = time();
    $viesti = $_POST['viesti'];



include_once 'guestConnect.php';






try {
    $stmt = $conn->prepare("INSERT INTO viestitb (username, milloin, viesti) 
                        VALUES(:username, :milloin, :viesti);");


    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':milloin', $milloin);
    $stmt->bindParam(':viesti', $viesti);



    if($stmt->execute() == false){
        $data = array(
            'error' => ' erere lisätty'
        );
    } else {
        $data = array(
            'onnistui' => 'hello'
        );
    } 
}   catch (PDOException $e) {
    $data = array(
        'onnistui' => $e->getMessage()
    );
}



header("Content-type: application/json;charset=utf-8");

echo json_encode($data);