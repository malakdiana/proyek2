<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {
 
	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
        $this->load->model('DashboardModel');
        $data3['penjualan'] = $this->DashboardModel->getPenjualan();
        $data3['tiket'] = $this->DashboardModel->getTiket();
        $data3['saldo'] = $this->DashboardModel->getSaldo();
        $data3['user'] = $this->DashboardModel->getUser();
        $data3['admin'] = $this->DashboardModel->getAdmin();
        $data3['tpenjualan']=$this->DashboardModel->getTotalPenjualan();
        $data3['film']=$this->DashboardModel->getTotalFilm();
        $data3['konf']=$this->DashboardModel->getKonfirmasi();
        $data3['konfirmasi']=$this->DashboardModel->infoSaldo();
        $data3['filmPersen']=$this->DashboardModel->film();
        $data3['tayang']=$this->DashboardModel->tayang();
		//$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('admin/header',$data);
        $data1['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
        $this->load->model('BioskopModel');
        $data1['daftarfilm'] = $this->BioskopModel->getFilm();
     
       $this->load->view('admin/index',$data3);
		
	}

}

/* End of file homeAdmin.php */
/* Location: ./application/controllers/homeAdmin.php */