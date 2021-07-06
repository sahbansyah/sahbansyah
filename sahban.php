<!DOCTYPE html>
<html>
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
.list table{
	width: 100%;
	
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
		<a href="index.php">LOGIN</a> | <a 
		 href="sahban.php">Data Masuk</a> | <a
		 href="kartu.php">sensor kartu</a> | <a 
		 href="ujian.php">Ujian</a> 
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
	<div style="width: 100%; text-align: center;">
	<h3>DAFTAR MAHASISWA BARU</h3>
</div>
<table border="2" bgcolor="green">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelmani</th>
		<th>Jurusan</th>
		<th>Alamat</th>
		<th>NISN</th>
		<th>no Hp</th>
		<th>Tanggal Lahir </th>
		<th>Tahun Tamat</th>
		<th>Nama Sekolah</th>
</tr>


<?php 
include "koneksi.php" ; // koneksi ke file lain
$no=1;  //memulai dari no 1
$ambildata = mysqli_query($koneksi,"select * from datadiri"); // ambildata dari dengan query(*=semua data) dari tabel barang
while ($tampil = mysqli_fetch_array($ambildata)){ //mengulang ketka data masih ada , dia akan terus mengambil data dari variabel ambildata
	//untuk menampilkan echo
	echo" 
<tr>
<td>$no</td>
<td>$tampil[nama]</td>
<td>$tampil[kelamin]</td>
<td>$tampil[jurusan]</td>
<td>$tampil[alamat]</td>
<td>$tampil[nisn]</td>
<td>$tampil[nohp]</td>
<td>$tampil[lahir]</td>
<td>$tampil[tamat]</td>
<td>$tampil[sekolah]</td>
</tr>
	";
$no++;

}



 ?>


</table>

</div>
<div class="clear"></div>
<!--akhir list item-->

</div>
<div class="clear"></div>
<!--copy list item lagi di sini-->
<!--akhirtutorial-->
<!--copy coding tutorial disini untum membuat tips dan trik-->
</div>
</div>

</body>
</html>