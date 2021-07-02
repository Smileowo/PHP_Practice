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
<?php require_once("M_Test.php"); ?>

<?php  /*==================================================================================================*/ ?>

<?php //Connection 
?>
<?php $con = mysqli_connect($servername, $username, $password, $db); ?>

<?php  /*==================================================================================================*/ ?>

<?php //post 
?>
<?php
$inserSQL = isset($_POST["name"]) <> NULL ? "SELECT * from member where name='" . $_POST["name"] . "'" : "SELECT * from name";
mysqli_select_db($con, "member");
$Result = mysqli_query($con, $inserSQL) or die(mysqli_error($con));
while ($r = mysqli_fetch_assoc($Result)) {
	$output[] = $r;
}
print(json_encode($output, JSON_UNESCAPED_UNICODE));
mysqli_close($con);
exit();
?>
