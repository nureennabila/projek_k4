
<?php
include('config.php');

$idpelajar=$_POST['idpelajar'];

$nama=$_POST['nama'];
$noic=$_POST['noic'];
$angkagiliran=$_POST['angkagiliran'];
$idkursus=$_POST['idkursus'];
$idmodul=$_POST['idmodul'];



$query="insert into pelajar values('$idpelajar','$nama','$noic','$angkagiliran','$idkursus','$idmodul')";
if (mysql_query($query)){
	
	
header ("location:statuspelajar.php");
}
	else
	echo "something went wrong";
?>