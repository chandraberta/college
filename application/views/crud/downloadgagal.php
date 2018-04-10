<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "	<style>";
echo "		table,th,td{
			border: 1px solid black;}";
echo "	</style>";
echo "</head>";
echo "<body>";

$koneksi = mysqli_connect('localhost', 'root', '','pbwbahagia');

if($koneksi)
{
	echo "Koneksi PHP dan mySQL berhasil";
	echo "<br/><br/>";
}
else {
	echo "Koneksi gagal";
}

$panggil_db = msqli_query($koneksi, "SELECT * FROM akun");

echo "<table>";
		echo "<tr>";
			echo "<td>Nama</td>";
			echo "<td>Alamat</td>";
			echo "<td>Email</td>";
			echo "<td>Password</td>";
			echo "<td>Usia</td>";
			echo "<td>Pendidikan</td>";
		echo "</tr>";

while ($row=mysqli_fetch_array($panggil_db, MYSQLI_ASSOC)) {
	echo "<tr>";
	echo "<td>", $row['nama'], "</td";
	echo "<td>", $row['alamat'], "</td";
	echo "<td>", $row['email'], "</td";
	echo "<td>", $row['password'], "</td";
	echo "<td>", $row['usia'], "</td";
	echo "<td>", $row['pendidikan'], "</td";
	echo "</tr>";
}
	echo "</table>";
echo "</body>";
echo "</html>";
?>

