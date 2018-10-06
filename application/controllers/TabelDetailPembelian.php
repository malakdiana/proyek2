<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelDetailPembelian extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('logged_in')) {
	      $session_data=$this->session->userdata('logged_in');
	      $data['username']=$session_data['username'];
	      $data['level']=$session_data['level'];
	      $current_controller = $this->router->fetch_class();
	      $this->load->library('acl');
	      if(!$this->acl->is_public($current_controller)){
	        if(!$this->acl->is_allowed($current_controller,$data['level'])){
	          //redirect('login/logout','refresh');
	          echo '<script>alert("anda tidak memiliki hak akses")</script>';
	          redirect('HomeAdmin','refresh');
	        }
	      }
	    }
	    else{

	      redirect('Login','refresh');
	    }
		}


	public function index()
	{
		$this->load->model('ModelTabelAdmin');
		$this->load->model('ModelDetilPembelian');
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $data1['daftarDetailPembelian'] = $this->ModelDetilPembelian->getAllDetilPembelian();
        $this->load->view('header', $data);
        $this->load->view('tabelDetailPembelian', $data1);
	}

	public function daftarDetailPembelian()
		{
		$this->load->model('ModelTabelAdmin');
		$this->load->model('ModelDetilPembelian');
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $data1['daftarDetailPembelian'] = $this->ModelDetilPembelian->getAllDetilPembelian();
        $this->load->view('header', $data);
        $this->load->view('tabelDetailPembelian', $data1);
		}

	public function delete($id)
		{

        $this->load->model('ModelDetilPembelian');
        // $id = $this->input->post('idAdmin'); 
        $this->ModelDetilPembelian->delete($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelDetailPembelian/daftarDetailPembelian', 'refresh');
    }

    public function createPdf()
	{
		$this->load->model('ModelDetilPembelian');
		$this->load->library('pdf');     
		$data['daftarDetailPembelian'] = $this->ModelDetilPembelian->getAllDetilPembelian();
		$this->pdf->load_view('tabelDetailPembelian',$data);
	}

}

/* End of file TabelPembelian.php */
/* Location: ./application/controllers/TabelPembelian.php */