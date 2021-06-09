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
?>

<?php 
    include_once('header.php');
?>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p>Terve!!!!</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <h4>Guestbook</h4>
                <ul id="guestUl"class="list-group"></ul>
                <form name="guest">
                    <fieldset>
                        <input id="viesti" style="width: 100%; float: left;" class="inputgroup" type="text" name="viesti" placeholder="Type something...">
                        <button style="float: right;" type="submit" class="btn btn-primary" name="komment">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<script onload=showKomments() src="../js/guest.js"></script>

<?php 
    include_once('footer.php');
?>
