<?php
include ('config.php');

$udidpelajar=$_POST['udidpelajar'];
$udnama=$_POST['udnama'];
$udnoic=$_POST['udnoic'];
$udangkagiliran=$_POST['udangkagiliran'];
$udidkursus=$_POST['udidkursus'];
$udidmodul=$_POST['udidmodul'];



$query="UPDATE pelajar SET nama='$udnama',noic='$udnoic',idkursus='$udidkursus',idmodul='$udidmodul',
angkagiliran='$udangkagiliran'
WHERE idpelajar='$udidpelajar'";

if(mysql_query($query)){
header('Location:statuspelajar.php');
}
else
	echo"something went wrong";
mysql_close();
?>