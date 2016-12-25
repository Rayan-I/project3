<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$dbhost = "localhost";
	$dbuser = "urcscon3_rifthik2"; 
	$dbpass = "coffee1N/!";  
	$dbname = "urcscon3_rifthik";

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));
?>

<?php include "db-info.php";?>
<?php
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>

<?php

$query = "INSERT INTO friends (first_name, last_name, phone) VALUES ('$name', '$email', '$phone')";
$result = mysqli_query($connection, $query);
$NumberOfRowsAffected = mysqli_affected_rows($connection);
if($NumberOfRowsAffected < 1 ) {
 die('No records were written to the database. Waaaa!');
}
mysqli_close($connection);

header("Location: database-read.php");
?>

