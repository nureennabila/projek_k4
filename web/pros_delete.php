<html>

<center><body bgcolor="">
<?php
include ('config.php');
$idpelajar=$_GET['idpelajar'];

$query = "delete from pelajar where idpelajar='$idpelajar'";
if($result=mysql_query($query)){

if ($result==TRUE){ 
echo "<br>";
echo "Operasi berjaya";
echo "<br>";
echo "<br>";
header ("location:statuspelajar.php");
}
if ($result==FALSE){ 
echo "<br>";
echo "Operasi gagal";
echo "<br>";
echo "<br>";
echo "<a href=\"statuspelajar.php\">senarai</a>";
}
}
?>
</body>
</center>
</html>