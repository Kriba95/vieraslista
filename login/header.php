<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta name="msapplication-tap-highlight" content="no">
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <title>Omat sivut</title>  
<link href="../css/main.css" rel="stylesheet">

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css"
  >
</head>
<body>
<header>

<div class="animate__slideOutLeft topnav" style="margin-top: -80px;" id="myTopnav">
  <a href="index.php?logout='1'" class="active">Logout</a>
  <a href="index.php?logout='1'" class="bactive"> <?php  if (isset($_SESSION['username'])) : ?>Logged as, <strong><?php echo $_SESSION['username']; ?></strong><?php endif ?></a>
    <div class="container">
      <div style="float: left;">
        <a> </a>
        <a href="./index.php">Index</a>

        
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>
</div>
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>

</header>