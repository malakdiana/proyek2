<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index($tgl='')
	{
		
			$tgl2= date("Y-m-d");
		
			$this->load->model('BioskopModel');
			if($tgl!=''){
			 $data['daftarFilm'] = $this->BioskopModel->cekJadwal($tgl);
			 $data['jamtayang'] = $this->BioskopModel->cekJam($tgl);
			}else{
				 $data['daftarFilm'] = $this->BioskopModel->cekJadwal($tgl2);
			 $data['jamtayang'] = $this->BioskopModel->cekJam($tgl2);
			}
			$this->load->view('user/jadwal', $data);
	}

	public function studio($id)
	{
			$this->load->model('BioskopModel');
			 $data['daftarStudio'] = $this->BioskopModel->getstudio($id);
			
		$this->load->view('user/studio',$data);
	}
	public function deskripsi($id){
		$this->load->model('BioskopModel');
		$data['daftarFilm'] = $this->BioskopModel->getDataFilm($id);
		 $data['daftarJadwal'] = $this->BioskopModel->cekJadwal2();
		$this->load->view('user/deskripsi',$data);
	}

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */