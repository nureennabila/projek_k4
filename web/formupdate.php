<html>
<head>
<meta charset="UTF-8">
<title>SISTEM PENDAFTARAN KURSUS</title>
</head>	
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

.dropdown-content a:hover {background-color:blue}

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
	<center>
		 <div class="w3-panel w3-leftbar w3-sand">
    <p class="w3-xxlarge w3-serif"><i>KOLEJ VOKASIONAL PERDAGANGAN JOHOR BAHRU</i></p>
    <p>Susur 7 , Jalan Tun Abdul Razak , 80350 , Johor Bahru , Johor Darul Takzim</p>
  </div>
</center>
</div>
<?php
include ('config.php');
include('session.php');
$idpelajar=$_GET['idpelajar'];

$sq="select * from pelajar INNER JOIN modul ON pelajar.idmodul=modul.idmodul
INNER JOIN kursus ON pelajar.idkursus=kursus.idkursus";


$sql="$sq where idpelajar=$idpelajar ";

$result=mysql_query($sql) or die (mysql_error());

$num=mysql_numrows($result);

$i=0;
while ($i<$num){
	$nama=mysql_result($result,$i,"nama");
    $noic=mysql_result($result,$i,"noic");
	$angkagiliran=mysql_result($result,$i,"angkagiliran");
	$idkursus=mysql_result($result,$i,"idkursus");
    $namakursus=mysql_result($result,$i,"namakursus");
	$idmodul=mysql_result($result,$i,"idmodul");
    $namamodul=mysql_result($result,$i,"namamodul");
?>
<center><body bgcolor="">
<br>
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<br>
<form action="pros_update.php" method="post">

Nama Pelajar:
<input type="text" name="udnama" value="<?php echo $nama;?>"/>

No ID Pelajar:
<input type="text" name="udidpelajar" value="<?php echo $idpelajar;?>"/>
No IC Pelajar:</th>
<input type="text" name="udnoic" value="<?php echo $noic;?>"/>
Angka giliran:
<input name="udangkagiliran" type="text" value="<?php echo $angkagiliran;?>"/>
Kursus:</th>

					<select name="udidkursus">
						<option value="<?php echo $idkursus;?>"><?php echo $namakursus;?></option>
<option value="">Sila Pilih</option>
<option value="401">PERAKAUNAN (BAK)</option>
<option value="402">KESETIAAN PENTADBIRAN (BKP)</option>
<option value="403">PENGURUS PERNIAGAAN (BPP)</option>
<option value="404">PANGKALAN DATA (KPD)</option>
					</select>
				</div>
Modul:</th>
					<select name="udidmodul">
						<option value="<?php echo $idmodul;?>"><?php echo $namamodul;?></option>
						<option value="">Sila Pilih</option>
						<option value="301">WEB PROGRAMMING</option>
						<option value="302">COMPUTER INTERACTION</option>
						<option value="303">AKAUNTING</option>
						<option value="304">BUKU TUNAI</option>
						<option value="305">PERNIAGAAN</option>
						<option value="306">PERNIAGAAN SATU KE DUA</option>
						<option value="307">KEYBOARDING</option>
						<option value="308">KEYBOARDING 2</option>
					</select>
				</div>
			</th>
					</tr>


</table>

<br>
<input name="Submit" type="Submit" value="Submit"/>
</br>
</form></body>
</center>
</html>
<?php
++$i;
}
?>
