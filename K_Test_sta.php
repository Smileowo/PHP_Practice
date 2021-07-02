<?php //Define Database Info. 
?>
<?php
$servername = "localhost";
$username = "pi";
$password = "mysql";
$db = "mydb";
?>

<?php  /*==================================================================================================*/ ?>

<?php //Require from table 
?>
<?php require_once("K_Test_sta.php"); ?>

<?php  /*==================================================================================================*/ ?>

<?php //Connection 
?>
<?php $con = mysqli_connect($servername, $username, $password, $db); ?>

<?php  /*==================================================================================================*/ ?>

<?php //post 
?>
<?php

$inserSQL = isset($_POST["sta"]) <> NULL ? "SELECT * from Kitchen where sta='" . $_POST["sta"] . "'" : "SELECT * from Kitchen";
mysqli_select_db($con, "Kitchen");
$Result = mysqli_query($con, $inserSQL) or die(mysqli_error($con));
while ($r = mysqli_fetch_assoc($Result)) {
	$output[] = $r;
}
print(json_encode($output, JSON_UNESCAPED_UNICODE));
mysqli_close($con);
exit();

?>

<?php
/*
$inserSQL = isset($_POST["a"])<>NULL? "SELECT * from test where a='".$_POST["a"]."'":"SELECT * from test";
mysqli_select_db($con,"test");
$Result = mysqli_query($con,$inserSQL) or die (mysqli_error());
while($r=mysqli_fetch_assoc($Result))
{
	$output[]=$r;
}
print(json_encode($output,JSON_UNESCAPED_UNICODE));
mysqli_close($con);
exit();
*/
?>
