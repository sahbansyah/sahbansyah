<hr>soal ujian
<br>
<br>
<form action="" method="post">
	<table>
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>

		</tr>
	</table>
</form>
<tr>
<td width="400"> 1. sebukan nama hewan yang hidup di laut dan di darat</td>
</tr>
<tr>
	<br>
	<br>

			<td ></td>
			<td><input type="radio" value="L" name="A">ayanm</td>

		</tr>
		<td ></td>
			<td><input type="radio" value="L" name="B">buaya</td>

		</tr>
		

			<td ></td>
			<td><input type="radio" value="L" name="C">ayanm</td>

		</tr>
		<td ></td>
			<td><input type="radio" value="L" name="D">buaya</td>
			</tr>
			<br>
			<br>
		<td ></td>
			<td><input type="submit" value="proses" name="hasil"></td>

<?php
include "koneksi.php";
if(isset($_POST['hasil'])){
mysqli_query($koneksi,"insert into sahban set
	nama ='$_POST[nama]'");
echo" SILAH KAN TUNGGU HASIL";

}
?>