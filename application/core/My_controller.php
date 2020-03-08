<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller{
	function __construct()
{
    parent::__construct();
}
    function render($view,$data)
    {

		$this->load->view('upload',$data);
    }
    function uploadProses($jumlahData,$file)
    {
      for ($i=0; $i < $jumlahData ; $i++){

			// Inisialisasi Nama,Tipe,Dll.
			$file['file']['name']     = $file['gambar']['name'][$i];
			$file['file']['type']     = $file['gambar']['type'][$i];
			$file['file']['tmp_name'] = $file['gambar']['tmp_name'][$i];
			$file['file']['size']     = $file['gambar']['size'][$i];

			// Konfigurasi Upload
			$config['upload_path']          = './assets/upload/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			
			// Memanggil Library Upload dan Setting Konfigurasi
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('file')){ // Jika Berhasil Upload
				$fileData = $this->upload->data(); // Lakukan Upload Data

				// Membuat Variable untuk dimasukkan ke Database
				$uploadData[$i]['judul'] = $fileData['file_name']; 
			}else{
				echo "<script> alert('Gagal Upload!')</script>";
				echo "<script> window.history.back();</script>";
			}
		}

		if($uploadData !== null){ // Jika Berhasil Upload

			// Insert ke Database 
			$insert = $this->M_Upload->upload($uploadData);
			
			if($insert){ // Jika Berhasil Insert
				echo "
					<a href='".base_url()."'> Kembali </a> 
					<br>
					Berhasil Upload ";
			}else{ // Jika Tidak Berhasil Insert
				echo "Gagal Upload";
			}
        }
    }
}