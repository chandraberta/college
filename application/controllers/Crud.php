<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();

	}

	public function index(){
		$data['akun'] = $this->db->get('Akun');
		$this->load->view('akun.html', $data);
	}

	public function download(){
		$this->load->view('download');
	}

	public function add()
	{
		$this->load->view('crud/add');
	}

	public function action_add()
	{
		$data = array(
			'nama' => $this->input->post('nama') , 
			'alamat' => $this->input->post('alamat') ,
			'email' => $this->input->post('email') ,
			'password' => $this->input->post('password') ,
			'usia' => $this->input->post('usia') ,
			'pendidikan' => $this->input->post('pendidikan')
		);

		$this->db->insert('Akun', $data);

		redirect('crud',refresh);
	}

	public function update($id = NULL)
	{

	}

	public function delete ($id = NULL)
	{

	}
}