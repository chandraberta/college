<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password],input[type=number], [select] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, [select] {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>


<form action="<?php echo base_url();?>crud/action_add" method="post" style="border:1px solid #ccc; text-align: center" class="modal-content">
  <div class="container" style="text-align: center">
    <h1>Sign Up</h1>
    <p>Isilah form dibawah ini untuk membuat akun</p>
    <hr>

    <label for="nama"><b>Nama</b></label>
    <input type="text" placeholder="Masukkan nama" name="nama" required>

    <label for="alamat"><b>Alamat</b></label>
    <input type="text" placeholder="Masukkan nama Provinsi" name="nama" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Masukkan Password maksimal 10 karakter" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Ulangi Password" name="psw-repeat" required>
    
    <label for="usia"><b>Usia</b></label>
    <input type="number" placeholder="Masukkan usia anda" name="nama" required>

    <label for="pendidikan"><b>Pendidikan</b></label>
    <select>
        <option value="SD">Sekolah Dasar</option>
        <option value="SMP">Sekolah Menengah Pertama</option>
        <option value="SMA">Sekolah Menengah Atas</option>
        <option value="kuliah">Perguruan Tinggi</option>
    </select>
    <br><br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>Anda menyetujui privasi <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Batal</button>
      <button type="submit" class="signupbtn">Daftar</button>
    </div>
  </div>
</form>


</body>
</html>
