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
<?php require_once("K_Update.php"); ?>

<?php  /*==================================================================================================*/ ?>

<?php //Update, find by id ?>
<?php

/*
$id=isset($_POST["id"])<>NULL?$_POST["id"]:"";
$num=isset($_POST["num"])<>NULL?$_POST["num"]:"0";
$a=isset($_POST["a"])<>NULL?$_POST["a"]:"0";
$b=isset($_POST["b"])<>NULL?$_POST["b"]:"0";
$c=isset($_POST["c"])<>NULL?$_POST["c"]:"0";
$d=isset($_POST["d"])<>NULL?$_POST["d"]:"0";
$e=isset($_POST["e"])<>NULL?$_POST["e"]:"0";
$f=isset($_POST["f"])<>NULL?$_POST["f"]:"0";
$g=isset($_POST["g"])<>NULL?$_POST["g"]:"0";
$h=isset($_POST["h"])<>NULL?$_POST["h"]:"0";
$i=isset($_POST["i"])<>NULL?$_POST["i"]:"0";
$j=isset($_POST["j"])<>NULL?$_POST["j"]:"0";
$k=isset($_POST["k"])<>NULL?$_POST["k"]:"0";
$l=isset($_POST["l"])<>NULL?$_POST["l"]:"0";
$price=isset($_POST["price"])<>NULL?$_POST["price"]:"0";
$sta=isset($_POST["sta"])<>NULL?$_POST["sta"]:"0";

mysqli_select_db($con,"Kitchen");
$sql = sprintf("UPDATE Kitchen SET a=%s,b=%s,c=%s,d=%s,e=%s,f=%s,g=%s,h=%s,i=%s,j=%s,k=%s,l=%s,price=%s,sta=%s WHERE id = %s", (int)$a,(int)$b,(int)$c,(int)$d,(int)$e,(int)$f,(int)$g,(int)$h,(int)$i,(int)$j,(int)$k,(int)$l,(int)$price,(int)$sta,(int)$id);
$Result=mysqli_query($con,$sql) or die (mysqli_error($con));
exit();
*/
?>

<?php  /*==================================================================================================*/ ?>

<?php //Update, find by num (table number) ?>


<?php
/*
$id=isset($_POST["id"])<>NULL?$_POST["id"]:"";
$num=isset($_POST["num"])<>NULL?$_POST["num"]:"0";
$a=isset($_POST["a"])<>NULL?$_POST["a"]:"0";
$b=isset($_POST["b"])<>NULL?$_POST["b"]:"0";
$c=isset($_POST["c"])<>NULL?$_POST["c"]:"0";
$d=isset($_POST["d"])<>NULL?$_POST["d"]:"0";
$e=isset($_POST["e"])<>NULL?$_POST["e"]:"0";
$f=isset($_POST["f"])<>NULL?$_POST["f"]:"0";
$g=isset($_POST["g"])<>NULL?$_POST["g"]:"0";
$h=isset($_POST["h"])<>NULL?$_POST["h"]:"0";
$i=isset($_POST["i"])<>NULL?$_POST["i"]:"0";
$j=isset($_POST["j"])<>NULL?$_POST["j"]:"0";
$k=isset($_POST["k"])<>NULL?$_POST["k"]:"0";
$l=isset($_POST["l"])<>NULL?$_POST["l"]:"0";
$price=isset($_POST["price"])<>NULL?$_POST["price"]:"0";
*/
$num=isset($_POST["num"])<>NULL?$_POST["num"]:"";
$sta=isset($_POST["sta"])<>NULL?$_POST["sta"]:"0";

mysqli_select_db($con,"Kitchen");
$sql = sprintf("UPDATE Kitchen SET sta=%s WHERE num = %s", (int)$sta,(int)$num);
$Result=mysqli_query($con,$sql) or die (mysqli_error($con));
exit();

?>
