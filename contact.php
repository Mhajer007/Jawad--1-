<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
 
  <body>

    <div class="container">

      <div class="masthead">
        <nav>
          <ul class="nav nav-justified">
            <li><a href="http://jawad.one/Jawad/index.php">Home</a></li>
            <li><a href="http://jawad.one/Jawad/protofolio.php">Protofolio</a></li>
            <li><a href="http://jawad.one/Jawad/about.php">About</a></li>
            <li class="active"><a href="http://jawad.one/Jawad/contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="jumbotron">
      
        <p class="lead"></p>
        
        <a class="btn btn-lg btn-success" href="http://jawad.one/Jawad/protofolio.php" role="button"><img src="img/jawad.png" alt="logo img" width="100px" height="60px"></a>
      </div>
      
       <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
 </script>
 <script src="editor/ckeditor.js"></script>
	<script src="editor/samples/js/sample.js"></script>
	<link rel="stylesheet" href="editor/samples/editorcss/samples.css"/>
	<link rel="stylesheet" href="editor/samples/toolbarconfigurator/lib/codemirror/neo.css"/>






  <!-- Primary Page Layout

  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="container">

    <div class="row">

      <div class="one-half column" style="margin-top: 0%">

         <fieldset>

        	<legend><h1><marquee behavior=scroll direction="up" scrollamount="2">Contact Me</marquee></h1></legend>
<div id="tabs" style="width: 600px">
  <ul>
 <li><a href="#tabs-1">Get In Touch</a></li>
  <li><a href="#tabs-3">Map Location</a></li>
  
   
    <!--<li><a href="#tabs-2">Contact Info</a></li>-->
    
  
  </ul>
  <div id="tabs-1">
    <p><form action="mailer.php" method="post" name="form1" id="form1" style="margin:0px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:20px; " onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">



Your Name:<br />

<input name="name" type="text" id="name" style="padding:2px; border:1px solid #CCCCCC; width:300px; height:35px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:18px;" value="<?php echo $_GET['name'];?>" placeholder="please , enter Your name" required/>

<br />



Your e-mail:<br />

<input name="from" type="email" id="from" style="padding:2px; border:1px solid #CCCCCC; width:300px; height:35px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:18px;" value="<?php echo $_GET['from'];?>" placeholder="please , enter Your e-mail" required/>

<br />





Subject:<br />

<input name="subject" type="text" id="subject" style="padding:2px; border:1px solid #CCCCCC; width:300px; height:35px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px;" value="<?php echo $_GET['subject'];?>" placeholder="please , enter Subject" required/>

<br />





Type verification image:<br />

<input name="verif_box" type="text" id="verif_box" style="padding:2px; border:1px solid #CCCCCC; width:300px; height:35px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px;" placeholder="please , enter verification image" required/>

<img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /><br />





<!-- if the variable "wrong_code" is sent from previous page then display the error field -->

<?php if(isset($_GET['wrong_code'])){?>

<div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Wrong verification code</div><br /> 

<?php ;}?>



Message:<br />

<textarea name="message" cols="25" rows="5" id="editor"  placeholder="please , enter your message" required><?php echo $_GET['message'];?></textarea>

<noscript><a href="http://www.thewebhelp.com" style="display:none;">contact form by thewebhelp</a></noscript>

<!--<input name="Submit" type="submit" style="margin-top:10px; display:block; border:1px solid #000000; width:100px; height:20px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:2px; padding-right:2px; padding-top:0px; padding-bottom:2px; line-height:14px; background-color:#EFEFEF;" value="Send Message"/>-->

<br />
<button type="submit" name="Submit" style="font-size:0.6em;"> Send Message </button>
<button type="reset" style="font-size:0.6em;"> Clear </button>

</form></p>
  </div>
  <!--<div id="tabs-2">
    <p>3896 Kenwood Place
Fort Lauderdale, FL 33301</p>
<p>
Phone: 1-500-677-5694<br />
Fax: 1-500-256-2768<br>
Email: info@yoursitename.com<br>
Web: http://yoursitename.com</p>
  </div>-->
  <div id="tabs-3">
  <form action="" method="POST">
  Coordinates<br>
  <input placeholder="enter Latitude" required="" name="opt1"/>
  <input placeholder="enter Longitude" required="" name="opt2"/>
  <button type="submit" name="Submit" style="font-size:0.6em;"> Show </button>
  </form>
  <?php 
  $lat = @$_POST['opt1'];
  $log = @$_POST['opt2'];
  if(empty($lat)){
  	$lat='51.5287352';
  	$log='-0.3817841';
  }
  ?>
   <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

function initialize() {
  var mapProp = {
    center:new google.maps.LatLng('<?=$lat?>','<?=$log?>'),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>



<div id="googleMap" style="width:500px;height:380px;"></div>
  </div>
</div>
 
        	

        </fieldset>

      </div>

    </div>

  </div>

<script>
	initSample();
</script>

<?php include 'footer.php';?>
     
