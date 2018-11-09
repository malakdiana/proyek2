<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelProfil extends CI_Controller {

  
    public function index()
    {
        $this->load->model('ModelTabelAdmin');
        $session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        //$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('admin/header', $data);   
        $data['daftarAdmin'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('admin/profil', $data);

    }

    public function updateFoto(){
        $session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
    $this->load->model('ModelProfilUser');
      $config['upload_path'] = './assets/upload/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '1000';
      $config['max_width']  = '1024';
      $config['max_height']  = '1768';

       $this->load->library('upload', $config);
$this->upload->initialize($config);
            if (! $this->upload->do_upload('foto')) {
                $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Foto Gagal diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('TabelProfil', 'refresh');
            }
            else{
                $this->ModelProfilUser->updateFotoUser($id);
                $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Foto berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('TabelProfil', 'refresh');
            }
    }
    public function update(){
        $this->load->model('ModelTabelAdmin');
        $session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->ModelTabelAdmin->updateAdmin($id);
                //$data['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
                $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('TabelProfil', 'refresh');
    }
    public function updatePass(){
        $this->load->model('ModelProfilUser');
        $pass=MD5($this->input->post('passLama'));
        if($pass==($this->session->userdata('logged_in')['password'])){
           $this->ModelProfilUser->updatePass(); 
           $this->session->set_flashdata('notif2','<div class="alert alert-success" role="alert"> Data Berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('TabelProfil', 'refresh');
        }else{
            $this->session->set_flashdata('notif2','<div class="alert alert-success" role="alert"> Password lama salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('TabelProfil', 'refresh');
        }
        

    }

}

/* End of file TabelAdmin.php */
/* Location: ./application/controllers/TabelAdmin.php */