<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  width: 100%;
}

.button:hover {opacity: 1}
</style>
</head>
<body>
  <center><h1>Halaman Admin</h1><h2>Selamat datang admin</h2></center>
  <a href="<?php echo base_url();?>index.php/crud">
<button class="button">Melihat Daftar Akun Pengguna</button></a>
  <a href="<?php echo base_url();?>index.php/crud/index">
<button class="button">Download File Daftar Akun</button></a>
<a href="<?php echo base_url();?>index.php/Admin/statistik">
<button class="button">Melihat statistik</button></a>

</body>
</html> 
