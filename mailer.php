<?php
// ----------------------------------------- 
//  The Web Help .com
// ----------------------------------------- 
// remember to replace your@email.com with your own email address lower in this code.

// load the variables form address bar
$name = $_REQUEST["name"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];
$from = $_REQUEST["from"];
$verif_box = $_REQUEST["verif_box"];

// remove the backslashes that normally appears when entering " or '
$name = stripslashes($name); 
$message = stripslashes($message); 
$subject = stripslashes($subject); 
$from = stripslashes($from); 

// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	// if verification code was correct send the message and show this page
	$message = "Name: ".$name."\n".$message;
	$message = "From: ".$from."\n".$message;
	mail("webmaster@jawad.one", 'Online Form: '.$subject, $_SERVER['REMOTE_ADDR']."\n\n".$message, "From: $from");
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
	?>
	<?php include 'header.php';?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
         <fieldset>
        	<legend><h1>Masseage Sent</h1></legend>
        	<p>Thanks For Your Email, If you do not get reply within 24 hour please call 0544208208</p>
        </fieldset>
      </div>
    </div>
  </div>

<?php include 'footer.php';?>
	<?php
} else {
	// if verification code was incorrect then return to contact page and show error
	header("Location:".$_SERVER['HTTP_REFERER']."?subject=$subject&from=$from&message=$message&wrong_code=true");
	exit;
}
?>


