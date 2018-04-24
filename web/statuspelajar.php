<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>SISTEM PENDAFTARAN KURSUS</title>

</head>
<style>

th,td{
border:1px solid black;
padding:10px;
}

</style>
<style>
body
{
	font-family:arial;
	font-size:15;
	background-color: lightblue;
}
#wraper
{
	width:1050px;
	margin:0 auto;
}
#header
{
	border:1px solid black;
	height:250px;
}
#menu
{
	border:1px solid black;
	background-color: #ccc;
}
#menu ul
{
	list-style-type:none;
	margin:0;
	padding:0;
}
#menu ul li
{
	list-style-type:none;
	margin:0;
	padding:0;
	display:inline-table;
}
#menu ul li:hover
{
	list-style-type:none;
	margin:0;
	padding:0;
	background-color:grey;
}
#menu ul li a
{
	list-style-type:none;
	margin:0;
	padding:0;
	text-decoration:none;
	display: block;
	line-height:40px;
	padding: 0 10px;
}
#kandungan
{
	border:1px solid black;
	min-height:400px;
	padding:10px;
}
#footer
{
	border:1px solid black;
	text-align:center;
	min-height:100px
	padding:10px;
	background-color: #ccc;
}


</style>
</head>
<body>
<div id="wraper">
<div id="header">

<img src="bener.jpg" alt="kvp" style="width:1048px;height:248px;"/>

</div>
<div id="menu">

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ccc;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: blue;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:#80bfff}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="index2.php">UTAMA</a></li>
  
	<li class="dropdown">
	   <a href="javascript:void(0)" class="dropbtn">MENU</a>
	       <div class="dropdown-content">
	   <a href="pelajar.php">DAFTAR PELAJAR</a>
	   <a href="modul.php">RUJUKAN MODUL</a>
	   <a href="rujukan.php">RUJUKAN KURSUS</a>
	   <a href="statuspelajar.php">STATUS PELAJAR</a>
	   </div>
    <li><a href="logout.php">LOG OUT</a></li>
  </li>
</ul>

</body>
</div>

<div id="kandungan">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
. {display:none;}
</style>
<body>

<div class="w3-container">
<?php include('session.php');?>

	<center>
		 <div class="w3-panel w3-leftbar w3-sand">
    <p class="w3-xxlarge w3-serif"><i>KOLEJ VOKASIONAL PERDAGANGAN JOHOR BAHRU  
	-welcome <?php echo $login_session; ?>-</i></p>
    <p>Susur 7 , Jalan Tun Abdul Razak , 80350 , Johor Bahru , Johor Darul Takzim</p>
  </div>
</center>
</div>

<?php
include ('config.php');
$sql="select * from pelajar INNER JOIN modul ON pelajar.idmodul=modul.idmodul
INNER JOIN kursus ON pelajar.idkursus=kursus.idkursus";

$result=mysql_query($sql) or die (mysql_error());
?>
<center><body bgcolor="">
<form>
<p><center><strong>Senarai Nama Pelajar</strong></center></p>
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor=""><strong>Bil</strong></td>
<td align="center" bgcolor=""><strong>Nama Pelajar</strong></td>
<td align="center" bgcolor=""><strong>Nombor Kad Pengenalan</strong></td>
<td align="center" bgcolor=""><strong>Id Pelajar</strong></td>
<td align="center" bgcolor=""><strong>Angka giliran Pelajar</strong></td>
<td align="center" bgcolor=""><strong>Kursus</strong></td>
<td align="center" bgcolor=""><strong>Modul</strong></td>
<td align="center" bgcolor=""><strong>Kemaskini</strong></td>
<td align="center" bgcolor=""><strong>Padam</strong></td> 
</tr>

<?php
$i=1;
if(mysql_num_rows($result)>0)
{
while($row=mysql_fetch_array($result))
{
	
	echo"<tr>";
	?><td><?php echo $i++; ?></td><?php
	echo"<td>".$row["nama"]."</td>";
	echo"<td>".$row["noic"]."</td>";
	echo"<td>".$row["idpelajar"]."</td>";
	echo"<td>".$row["angkagiliran"]."</td>";
	echo"<td>".$row["namakursus"]."</td>";
	echo"<td>".$row["namamodul"]."</td>";
	echo"<td>","<a href=\"form_update.php?idpelajar=".$row['idpelajar']."\">Kemaskini</a>";
	echo"<td>","<a href=\"pros_delete.php?idpelajar=".$row['idpelajar']."\">Padam </a>";//kod PHP
}
}
echo"</table>";
echo"<center>";
echo"<br>";
?>
<center><a href="pelajar.php" target="_top">Tambah Pelajar Baharu</a></center>
<br>
<br>


</form>

</body></center>
<div class="bg"></div>
</div>
<div id="footer">
<h4>© KOLEJ VOKASIONAL PERDAGANGAN JB. 2018 ALL RIGHTS RESERVED: KV PERDAGANGAN JB</h4>
</div>
</div>
</html>