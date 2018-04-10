<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
//Langkah 1: memulai session PHP
session_start();

//Langkah 2: Memeriksa jika pengguna belum login dengan memeriksa nilai session
if(empty($_SESSION['logged_in']))
{
	//jika nilai session kosong, maka pengguna belum login
	//alihkan ke halaman login
	header('Location: login.php?action=not_yet_logged_in');
}
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<?php
//Langkah 3: Mendapatkan dan mengatur action. Action akan menentukan apakah akan logout atau menampilkan pesan bahwa pengguna sudah login
	$action = isset($_GET['action']);
	
	//dieksekusi ketika pengguna mengklik tombol logout
	if($action=='logout')
	{
		//menghapus session dan semua pengaturan session
		session_destroy();
		
		//mengalihkan pada halaman login
		header ('Location: login.php');
	}
	else if($action=='already_logged_in')
	{
		//echo "<div id='infoMessage'>Anda sudah Login.</div>";
		
	}
?>

    <title>Teknologi informasi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.css.map">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/creative.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/css/creative.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sb-admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sb-admin.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stle.css">

    <script src="<?php echo base_url();?> assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?> assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?> assets/js/creative.js"></script>
    <script src="<?php echo base_url();?> assets/js/creative.min.js"></script>
    <script src="<?php echo base_url();?> assets/js/SmoothScroll.js"></script>
    <script src="<?php echo base_url();?> assets/js/theme-scripts.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/bootstrap/css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/bootstrap/css/bootstrap-reboot.min.css">

    <script src="<?php echo base_url();?> assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url();?> assets/vendor/bootstrap/js/bootstrap,bundle.js.map"></script>
    <script src="<?php echo base_url();?> assets/vendor/bootstrap/js/bootstrap.bundle.min"></script>
    <script src="<?php echo base_url();?> assets/vendor/bootstrap/js/bootstrap.bundle.min.js.map"></script>
    <script src="<?php echo base_url();?> assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?> assets/vendor/bootstrap/js/bootstrap.js.map"></script>
    <script src="<?php echo base_url();?> assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?> assets/vendor/bootstrap/js/bootstrap.min.js.map"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/font-awesome/css/font-awesome.css.map">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/vendor/font-awesome/css/font-awesome.min.css">


    <script src="<?php echo base_url();?> assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url();?> assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?> assets/vendor/jquery/jquery.min.map"></script>
    <script src="<?php echo base_url();?> assets/vendor/jquery/jquery.slim.js"></script>
    <script src="<?php echo base_url();?> assets/vendor/jquery/jquery.slim.min.js"></script>
    <script src="<?php echo base_url();?> assets/vendor/jquery/jquery.slim.min.map"></script>

    <script src="<?php echo base_url();?> assets/vendor/jquery-easing/jquery.easing.compatibility.js"></script>
     <script src="<?php echo base_url();?> assets/vendor/jquery-easing/jquery.easing.js"></script>
      <script src="<?php echo base_url();?> assets/vendor/jquery-easing/jquery.easing.min.js"></script>

     <script src="<?php echo base_url();?> assets/vendor/magnific-popup/jquery.magnific-popup.js"></script> 
     <script src="<?php echo base_url();?> assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>  
     <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

     <script src="<?php echo base_url();?> assets/vendor/scrollreveal/scrollreveal.js"></script> 
     <script src="<?php echo base_url();?> assets/vendor/scrollreveal/scrollreveal.min.js"></script>

     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_bootsrap-overrides.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_cards.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/__footer.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_global.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_login.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_masthead.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_mixins.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_navbar.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_portofolio.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_services.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_utilities.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_variables.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_creative.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?> assets/scss/_sb-admin.scss">


    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
  

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
	  <!-- <div id='successMessage'>Anda berhasil login. :)</div> -->
<div id='actions'>
	<a href='index.html?action=logout'>Logout?</a> | 
    <a href='login.php'>Pergi ke halaman login</a>
    </div>
        <a class="navbar-brand js-scroll-trigger" href="#page-top">HOME</a>
	
		<a class="btn btn-primary btn-xl js-scroll-trigger" href="login.php">LOGIN</a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Visi & Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Profil Lulusan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
          	<h3>
            	<strong>Program Studi Sarjana (S1)</strong>
            </h3>
            <h1 class="text-uppercase">
              <strong>Teknologi Informasi</strong>
            </h1>
            <h4>
            Fakultas Teknologi Informasi dan Komunikasi
            <br/>
            Institut Teknologi Sepuluh Nopember
            <br/>
            Surabaya
            </h4>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">  </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>


    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">
        VISI & MISI</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
          	<h3><strong>VISI</strong></h3>
            <p class="lead">Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang keamanan siber dan Teknologi berbasis Internet <i>(Internet of Things)</i> untuk mendukung pembangunan <i>Smart City</i> secara berkelanjutan hingga tahun 2022.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">
            <h3><strong>MISI</strong></h3>
            <ol>
            	<li>Menyelenggarakan pendidikan dan pengajaran dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM yang berkualitas serta fasilitas yang memadai.</li>
                <li>Melaksanakan penelitian yang bermutu di bidang Keamanan Siber dan <i>Internet of Things</i> untuk teknologi <i>Smart City</i>.</li>
                <li>Menjalin kemitraan dengan instansi dalam maupun luar negeri.</li>
                <li>Menyelenggarakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembangan potensi dan pemberdayaan masyarakat daerah.</li> </p>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Profil Lulusan</h2>
            <hr class="my-5">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-5x fa-lock text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Spesialis Keamanan Siber</h3>
              <p class="text-muted mb-0"><i>Cyber Security Specialist</i></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-5x fa-wifi text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Spesialis Internet of Things</h3>
              <p class="text-muted mb-0"><i>IoT Specialist</i></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-5x fa-user-secret text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Analisis Keamanan Aplikasi</h3>
              <p class="text-muted mb-0"><i>Application Security Analist</i></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-5x fa-cloud text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Pengembang Layanan Awan</h3>
              <p class="text-muted mb-0"><i>Cloud Service Developer</i></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h3><strong>Mengapa Teknologi Informasi ?</strong></h3>
              <p>
              <ol>
              <li>Untuk menjaga keamanan negara dari kejahatan Siber.Saat ini banyak terdapat <i>hacker</i> di dunia siber, oleh karena itu diperlukan ahli keamanan siber dan aplikasi untuk mengurangi penipuan <i>(fraud)</i>. Karena itu, lulusan Teknologi informasi akan sangat dibutuhkan dan memiliki pendapatan yang fantastis.</li>
              <li>Program Studi Teknologi Informasi dapat mencetak lulusan yang mempunyai keahlian di bidang layanan <i>cloud</i>, yang berkontribusi dalam meningkatkan efisiensi operasional organisasi.</li>
              <li>Memiliki kemampuan untuk menghasilkan SDM yang ahli dalam bidang integrasi sistem sebagai solusi untuk mendukung penanganan aplikasi-aplikasi di instansi pemerintahan(E-Gov).</li>
              <li>Memfasilitasi optimatisasi proses bisnis di organisasi untuk menghadapi perkembangan teknologi <i>Smart City</i></li></ol>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/02.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h3><strong>Jenis Peluang Kerja</strong></h3>
              <p>
              	<ul>
                	<li>komputasi Awan dan Komputasi Terdistribusi <i>(Cloud and Distributed Computing)</i></li>
                    <li>Arsitektur web dan pengembangan framework <i>Web Architecture and Development Framework)</i></li>
                    <li>Integrasi Perangkat Lunak dan Middleware <i>(Middleware and Integration Software)</i></li>
                    <li>Rancangan Antarmuka Pengguna <i>(User Interface Design)</i></li>
                    <li>Keamanan Informasi dan Jaringan <i>(Network and information Security)</i></li>
                    <li>Manajemen Penyimpanan Data <i>(Storage System and Management)</i></li>
                  	
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/03.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h3><strong>Seleksi Masuk</strong></h3>
              <h4>Tahun akademik 2018/2019</h4>
              <p>
              	<ul>
                	<li> 
                    <a href="https://smits.its.ac.id/sarjana/#snmptn">SNMPTN</a></li>
                    <li>
                    <a href="https://smits.its.ac.id/sarjana/#sbmptn">SBMPTN</a></li>
                    <li>
                    <a href="https://smits.its.ac.id/sarjana/#pkm">PKM</a></li></ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <section class="p-0" id="portfolio">
    <div class="col-lg-12 text-center">
            <h2 class="section-heading">Fasilitas</h2>
            <hr class="my-5">
          </div>
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    laboratorium
                  </div>
                  <div class="project-name">
                    <p style="font-size:12px">Terdapat 2 laboratorium komputer (Lab Keamanan Siber dan Lab Teknologi <i>smart city</i>. Seluruh komputer telah dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegiatan praktikum maupun kegiatan akademis lainnya.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Ruang baca
                  </div>
                  <div class="project-name">
                    <p style="font-size:12px">Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahan, dari bahan cetak hingga koleksi digital seperti CD-ROM, CD, VCD, dan DVD. Selain itu juga menyediakan publikasi serial harian dan bulanan seperti surat kabar dan majalah.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Ruang kelas
                  </div>
                  <div class="project-name">
                    <p style="font-size:12px">Setiap ruang kelas dilengkapi dengan pendingin ruangan dan LCD serta akses internet gratis yang dapat mendukung kegiatan akademis mahasiswa.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Perpustakaan
                  </div>
                  <div class="project-name">
                    <p style="font-size:12px">Perpustakaan pusat dengan enam lantai yang memiliki koleksi buku dan jurnal yang lengkap baik online atau offline. </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Perangkat lunak legal gratis
                  </div>
                  <div class="project-name">
                    <p style="font-size:12px">Setiap mahasiswa memiliki hak untuk mengunduh software seperti windows, office365, mathlab dan software-software lainnya untuk menunjang kegiatan belajar. Software bisa diunduh gratis.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    bis kampus
                  </div>
                  <div class="project-name">
                    <p style="font-size:12px">Adanya bis kampus yang selalu beroperasi pada hari aktif kuliah yang siap mengantar mahasiswa ke kampusnya.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary text-white mb-0" id="sign-up">
      <div class="container">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Sign-Up</h2>
            <hr class="my-4">
            <p> Lakukan Sign-up untuk mendaftarkan diri anda di website ini </p>
            <a href="<?php echo base_url(); ?>index.php/crud/add" class="btn btn-primary btn-xl js-scroll-trigger" style=" background-color:white ; border-color: #F05F40; color: #F05F40 " href="daftar.php">DAFTAR</a>
          </div>

      </div>
  </section>

  
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contact</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:teknologi.informasi@its.ac.id">teknologi.informasi@its.ac.id</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    
    <section>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>


<!--    
    <p>Masukkan Komentar <br/>
<form method="post">
	Nama : 
	<input type="text" name="nama" ><br/>
    Email :
	<input type="email" name="email"><br/>
    Komentar :
	<input type="text" name="komentar" style="width:400pt" style="height:50pt"><br/>
    <input type="submit" value="kirim">
	</form>
    </br>
</br>
<h3>Hapus Komentar</h3>
<form method="post">
	Masukkan nomor komentar yang ingin dihapus  
    <input type="number" name="nomor">
    <input type="submit" value="hapus"><br/>
</form>
-->
      </body>
</html>

        




