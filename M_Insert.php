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
<?php require_once("M_Insert.php"); ?>

<?php  /*==================================================================================================*/ ?>

<?php //Insert ?>
<?php
/*
$a=isset($_POST["a"])<>NULL?$_POST["a"]:"0";
$b=isset($_POST["b"])<>NULL?$_POST["b"]:"0";
$c=isset($_POST["c"])<>NULL?$_POST["c"]:"0";
$d=isset($_POST["d"])<>NULL?$_POST["d"]:"0";
*/

/*
$a=isset($_POST["a"])<>NULL;
$b=isset($_POST["b"])<>NULL;
$c=isset($_POST["c"])<>NULL;
$d=isset($_POST["d"])<>NULL;
*/

/*
$a=($_POST["a"]);
$b=($_POST["b"]);
$c=($_POST["c"]);
$d=($_POST["d"]);
*/

/*
$num=($_POST["num"]);
$a=($_POST["a"]);
$b=($_POST["b"]);
$c=($_POST["c"]);
$d=($_POST["d"]);
$e=($_POST["e"]);
$f=($_POST["f"]);
$g=($_POST["g"]);
$h=($_POST["h"]);
$i=($_POST["i"]);
$j=($_POST["j"]);
$k=($_POST["k"]);
$l=($_POST["l"]);
$price=($_POST["price"]);
$sta=($_POST["sta"]);
*/

$name=($_POST["name"]);
$phone=($_POST["phone"]);
$email=($_POST["email"]);

mysqli_select_db($con,"member");
$sql = sprintf("INSERT INTO member(name,phone,email) VALUES ('$name','$phone','$email')");
$Result=mysqli_query($con,$sql) or die (mysqli_error($con));
exit();
?>


