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
<?php require_once("K_Insert.php"); ?>

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


mysqli_select_db($con,"Kitchen");
$sql = sprintf("INSERT INTO Kitchen(num,a,b,c,d,e,f,g,h,i,j,k,l,price,sta) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)", (int)$num,(int)$a,(int)$b,(int)$c,(int)$d,(int)$e,(int)$f,(int)$g,(int)$h,(int)$i,(int)$j,(int)$k,(int)$l,(int)$price,(int)$sta);
$Result=mysqli_query($con,$sql) or die (mysqli_error($con));
exit();

/*
mysqli_select_db($con,"test");
$sql = sprintf("INSERT INTO test(a,b,c,d) VALUES (%s,%s,%s,%s)", (int)$a,(int)$b,(int)$c,(int)$d);
$Result=mysqli_query($con,$sql) or die (mysqli_error($con));
exit();
*/
?>

