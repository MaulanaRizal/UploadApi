<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'core/My_controller.php';
class Upload extends My_controller {
	function __construct()
  {
	parent::__construct(); // construct the Model class
	$this->load->model('M_Upload');
  }	

	public function index()
	{
		$this->load->model('M_upload');
		$data['query']=$this->M_Upload->getAll();
		$this->render('upload',$data);
	}

	public function prosesUpload(){
		// Panggil Model M_Welcome
		$this->load->model('M_Upload');
		$data['query']=$this->M_Upload->getAll();
		// Hitung Jumlah File/Gambar yang dipilih
		$jumlahData = count($_FILES['gambar']['name']);
		
		//Upload file

		$this->uploadProses($jumlahData,$_FILES);
		// Lakukan Perulangan dengan maksimal ulang Jumlah File yang dipilih

		}
	
	public function check()
	{
		$gambar=$this->input->post('gambar');
		print_r($gambar[0]);
	}
}
