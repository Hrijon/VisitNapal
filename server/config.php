
<?php
// Creating connection to xampp database
$con = mysqli_connect("localhost", "root","") or die("Unable to connect");
//check connection
mysqli_select_db($con, "visit_nepal") OR die('cannot connect to database');

?>
