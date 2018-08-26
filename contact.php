<?php
define('DB_NAME','pangani');
define('DB_USER','root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if (!$link) {
	die('could not connect:'.mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('can\'t use ' . DB_NAME . ':' . mysql_error());
}

$value =$_POST['name'];
$value1 =$_POST['email'];
$value7 =$_POST["pnumber"];
$value8=$_POST['message'];


$sql = "INSERT INTO contactform (name,email,pnumber,message) VALUES ('$value','$value1','$value7','$value8')";

if (!mysql_query($sql)) {
	die('error:' . mysql_error());
}
mysql_close()
 ?>
 
 <html>
 <head>
 	<title>sent</title>
 </head>
 <body>
 <p>Message was sent successfully</p>
  <button onclick=" goBack() "  class="btn btn-danger"> Go Back
    
</button>
<script type="text/javascript"> function goBack() {
    window.history.back();
    }
    </script>
 </body>
 </html>