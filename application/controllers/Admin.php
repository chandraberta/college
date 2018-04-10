<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 public function index()
 {
  $this->load->view('admin');
 }

 public function daftarAkun()
 {
 	$this->load->view('akun');
 }

public function statistik()
{
	$this->load->view('statistik.html');
}

 public function komentar()
 {
 	echo "Berisi tabel komentar";
 }

}