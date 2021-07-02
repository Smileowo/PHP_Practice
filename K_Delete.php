<?php //Define Database Info. ?>
<?php
$servername = "localhost";
$username = "pi";
$password = "mysql";
$db = "mydb";
?>

<?php  /*==================================================================================================*/ ?>

<?php //Connection ?>
<?php $con = mysqli_connect($servername,$username,$password,$db); ?>

<?php  /*==================================================================================================*/ ?>

<?php //Require from table ?>
<?php require_once("K_Delete.php"); ?>

<?php  /*==================================================================================================*/ ?>

<?php //Delete ?>
<?php
$num=isset($_POST["num"])<>NULL?$_POST["num"]:"";
mysqli_select_db($con,"Kitchen");
$sql = sprintf("DELETE FROM Kitchen WHERE num = %s", (int)$num);
$Result=mysqli_query($con,$sql) or die (mysqli_error($con));
mysqli_close($con);
exit();

?>
