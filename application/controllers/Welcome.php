<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index() {

		$this->load->view('file');
	}

	public function processUpload(){

		//load model

		$this->load->model('M_Welcome');
		
		//count model 
		$jumlahData = count($_FILES['gambar']['name']);

		for ($i=0; $i < $jumlahData ; $i++):

			$_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
			$_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
			$_FILES['file']['size']     = $_FILES['gambar']['size'][$i];


			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';

  
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('file')){ // Jika Berhasil Upload

				$fileData = $this->upload->data(); // Lakukan Upload Data

				// Membuat Variable untuk dimasukkan ke Database
				$uploadData[$i]['picture'] = $fileData['file_name'];
				$uploadData[$i]['picture_size'] = $fileData['file_size'];
				$uploadData[$i]['pic_ext'] = $fileData['file_ext'];
				$uploadData[$i]['pic_path'] = $fileData['file_path'];
			}

		endfor; // Penutup For



		if($uploadData !== null){ // Jika Berhasil Upload

			// Insert ke Database 
			$insert = $this->M_Welcome->upload($uploadData);
			
			if($insert){ // Jika Berhasil Insert
				echo " 
					<br>
					insert Upload ";
			}else{ // Jika Tidak Berhasil Insert
				echo "Gagal Upload";
			}

		}



	}



// return data after upload image

/*

 	[file_name] => UQdK8K-53wc1.jpg
    [file_type] => image/jpeg
    [file_path] => C:/wamp64/www/student/uploads/
    [full_path] => C:/wavmp64/www/student/uploads/UQdK8K-53wc1.jpg
    [raw_name] => UQdK8K-53wc1
    [orig_name] => UQdK8K-53wc.jpg
    [client_name] => UQdK8K-53wc.jpg
    [file_ext] => .jpg
    [file_size] => 306.06
    [is_image] => 1
    [image_width] => 1080
    [image_height] => 900
    [image_type] => jpeg
    [image_size_str] => width="1080" height="900"


*/


?>