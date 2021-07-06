
<head>
	<style>
	body{
		font-size: 10px;
		width: 100%;
		min-height: 100%
		margin:0px;
		padding: 0px;
	}
h1{
	color: #0A0;
}
h2{
	color:#FFF;
	font-size: 30px;
	margin: 0px;
}
.header{
	background: #0A0;
	padding: 10px;
}
.content{
	background:#FFF;
	padding: 10px;
}
.list{
	width: 100%;
}
.list img{
	width: 30%;
	float: left;
}
.list .list-detail{
	width: 80%;
	float: right;
	margin-left: 20px;
}
.list .list-detail a{
color: #0A0;
text-decoration: none;
font-weight: bold;
}
.clear{
	clear: both;
	margin-bottom: 10px;
}
td{
	font-size: 10px;
}
a{
	text-decoration: none;
	color: #066;
}
a:visit{
	color: #066;
}
</style>
</head>
<body>
	<div class="header">
	<h2 style="color: #FFF;">menu pendaftaran</h2>
	<font color="#FFF" size="2">silahkan isi sesuai data</font>
	<!--Menu-->
	<div style="background: #DDD; padding: 10px;margin-top: 10px;">
		<a href="sahban1.php">LOGIN</a> | <a 
		 href="sahban.php">Data Masuk</a> | <a 
		 href="kartu.php">sensor kartu</a> | <a 
		 href="ujian.php">ujian</a>
	</div>
</div>
<div class="content">
	<div style="width: 100%; text-align: center;">
		<h1>home</h1>
	</div>
<div>
	<!--TUTORIAL-->
<b>tutorial</b>
<hr>
<!--list item-->
<div class="list">

<h3>tambah barang</h3>
<form action="" method="post">
	<table>
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>

		</tr>
		<tr>
			<td width="130">Jenis Kelamin</td>
			<td><input type="text" name="kelamin"></td>

		</tr>
		<tr>
			<td width="130">Jurusan</td>
			<td><input type="text" name="jurusan"></td>

		</tr>
		<tr>
			<td width="130">Alamat</td>
			<td><input type="text" name="alamat"></td>

		</tr>
		<tr>
			<td width="130">NISN</td>
			<td><input type="text" name="nisn"></td>

		</tr>
		<tr>
			<td width="130">Np Hp</td>
			<td><input type="text" name="nohp"> **max 15 angka</td>

		</tr>
		<tr>
			<td width="130">Tanggal Lahir</td>
			<td><input type="text" name="lahir">***tttt-bb-tt</td>

		</tr>
		<tr>
			<td width="130">Tahun Tamat</td>
			<td><input type="text" name="tamat"></td>

		</tr>
		<tr>
			<td width="130">Sekolah Asal</td>
			<td><input type="text" name="sekolah"></td>

		</tr>
		<!--pasword-->
		
		<tr>
			<td width="130">user name</td>
			<td><input type="text" name="user">Isi Email Anda Dengan Benar</td>

		</tr>
		<tr>
			<td width="130">password</td>
			<td><input type="password"  name="pass">Huruf dan Angka</td>

		</tr>
		<tr>
			<td ></td>
			<td><input type="submit" value="simpan" name="proses"></td>

		</tr>

	</table>
</form>

<?php 
include "koneksi.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi,"insert into datadiri set
nama ='$_POST[nama]',
kelamin = '$_POST[kelamin]',
jurusan ='$_POST[jurusan]',
alamat ='$_POST[alamat]',
nisn ='$_POST[nisn]',
nohp ='$_POST[nohp]',
lahir ='$_POST[lahir]',
tamat ='$_POST[tamat]',
sekolah ='$_POST[sekolah]'
");
}
if(isset($_POST['proses'])){
	mysqli_query($koneksi,"insert into login set
username ='$_POST[user]',
password ='$_POST[pass]'
");
}



 ?>	

</div>
<div class="clear"></div>
<!--akhir list item-->

<!--copy list item lagi di sini-->
<!--akhirtutorial-->
<!--copy coding tutorial disini untum membuat tips dan trik-->
</div>
</div>
</body>





