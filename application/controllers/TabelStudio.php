<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelStudio extends CI_Controller {
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
        if($this->acl->is_allowed($current_controller,$data['level'])){
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
		 $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
         $this->load->view('admin/header');
        $this->load->view('admin/tabelStudio');
	}
	public function gridDinamis()
    {
    	$session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
       $this->load->view('admin/header');
        $this->load->view('admin/tabelStudio');
    }

    public function getAllBioskop()
    {
        $this->load->model('BioskopModel');
        $result = $this->BioskopModel->getAllBioskop(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addBioskop(){
        $this->load->model('BioskopModel');
        $this->BioskopModel->save();
    }

    public function deleteBioskop()
    {
        $this->load->model('BioskopModel');
        $id = $this->input->post('idBioskop'); 
        $this->BioskopModel->delete($id);
    }
    public function updateBioskop()
    {
        $this->load->model('BioskopModel');
        $id = $this->input->post('idStudio'); 
        $this->BioskopModel->update($id);
    }

     public function createPdf()
  {
    $this->load->model('BioskopModel');
    $this->load->library('pdf');     
    $data = $this->ModelSaldo->getAllBioskop();
    $this->pdf->load_view('table-basic',$data);
  }
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */