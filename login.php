<?php
// Langkah 1 : Memulai session PHP.
// Harus dimulai pertama kali untuk mencegah error
// headers already sent
session_start();

//Langkah 2 : Memeriksa apakah pengguna sudah login dengan memeriksa nilai session
if(!empty($_SESSION['logged_in'])== true)
{
	//jika sudah, maka alihkan pengguna di halaman index
	//dan beritahu pengguna jika sudah login
	header('Location: index.php?action=already_logged_in');
}
?>

<html>
<head>
<title>Script Login PHP </title>
<link type="text/css" rel="stylesheet"
href="style.css"/>
</head>

<body>
<div id="loginForm">
<p>
  <?php
//Langkah 3 : Memeriksa action dan menampilkan pesan yang sesuai.
if(isset($_GET['action'])=='not_yet_logged_in')
{
	echo "<div id='infoMessage'> Anda belum login.</div>";
}
//Langkah 4 : Memeriksa jika pengguna sudah mengklik tombol 'login' dengan memeriksa variabel PHP $_POST
if($_POST)
{
	//username dan password ini adalah contoh
	//password harus dienkripsi supaya aman
	$username = 'berta';
	$password = 'chandra';
	
	//memeriksa apakah password dan username yang dimasukkan sesuai
	if($_POST['username']==$username &&
		$_POST['password']==$password)
		{
			//Jika sesuai atur nilaisession menjadi true
			$_SESSION['logged_in'] = true;
			
			//dan alihkan ke halaman index
			header('Location: index.php');
		}
		else
		{
			//jika tidak sesuai, beritahu pengguna bahwa akses ditolak
			echo "<div id='failedMessage'>Akses Ditolak .</div>";
		}
}
?>
<!-- tempat pengguna memasukkan username dan password -->
<form action="login.php" method="post">

<div id="formHeader">Login</div>
<div id="formBody">
<div class="formField">
<input type="text" name="username" placeholder="Username"/>
</div>

<div class="formField">
<input type="password" name="password" placeholder="password">
</div>

<div>
<input type="submit" value="Login" class="customButton"/>
</div>
</div>


<div id="userNotes">
<div>Username: berta</div>
<div>Password: chandra</div>
<div><a href="index.html">Pergi ke halaman utama</a></div>
</div>

</form>
</p>
</div>
</body>
</html>