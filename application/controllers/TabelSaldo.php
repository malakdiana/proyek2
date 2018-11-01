<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelSaldo extends CI_Controller {
	//public function __construct()
	// {
	// 	parent::__construct();
	// 		if ($this->session->userdata('logged_in')) {
	//       $session_data=$this->session->userdata('logged_in');
	//       $data['username']=$session_data['username'];
	//       $data['level']=$session_data['level'];
	//       $current_controller = $this->router->fetch_class();
	//       $this->load->library('acl');
	//       if(!$this->acl->is_public($current_controller)){
	//         if($this->acl->is_allowed($current_controller,$data['level'])){
	//           //redirect('login/logout','refresh');
	//           echo '<script>alert("anda tidak memiliki hak akses")</script>';
	//           redirect('HomeAdmin','refresh');
	//         }
	//       }
	//     }
	//     else{

	//       redirect('Login','refresh');
	//     }
	// }

	public function index()
	{
		$this->load->model('ModelTabelAdmin');
		$this->load->model('ModelSaldo');
		$this->load->model('ModelTabelUser');
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('admin/header', $data);
		$data['daftarSaldo'] = $this->ModelSaldo->getAllSaldo();
        $data['user_list'] = $this->ModelTabelUser->getAllUser2();
        $this->load->view('admin/tabelSaldo', $data);
	}

public function konfirmasi(){
	ini_set( 'sendmail_from', "pesaninicinema@gmail.com" ); 
ini_set( 'SMTP', "mail.gmail.com" );  
ini_set( 'smtp_port', 465 );
 $config = [
               'useragent' => 'CodeIgniter',
               'protocol'  => 'smtp',
               'mailpath'  => '/usr/sbin/sendmail',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'pesaninicinema@gmail.com', // Ganti dengan email gmail Anda
               'smtp_pass' => '*helo12345*', // Password gmail Anda
               'smtp_port' => 465,
               'smtp_keepalive' => TRUE,
               'smtp_crypto' => 'SSL',
               'wordwrap'  => TRUE,
               'wrapchars' => 80,
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'validate'  => TRUE,
               'crlf'      => "\r\n",
               'newline'   => "\r\n",
           ];
           // Load library email dan konfigurasinya
        $this->load->library('email', $config);
 
        // Email dan nama pengirim
        $this->email->from('pesaninicinema@gmail.com', 'Ini Cinema');
        $mail=$this->input->post('email');
        // Email penerima
        $this->email->to("$mail"); // Ganti dengan email tujuan Anda
 
 
        // Subject email
        $this->email->subject('Konfirmasi Pengisian Saldo | IniCinema.com');
 
        // Isi email
        $this->email->message("Pengisian Saldo anda berhasil. Nikmati kemudahan pembelian tiket online di IniCinema ");
 
        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
           $this->load->model('ModelSaldo');
		$this->ModelSaldo->konfirmasi();
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        redirect('TabelSaldo/', 'refresh');
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
		
}
	public function daftarSaldo()
	{
		$this->load->model('ModelTabelAdmin');
		$this->load->model('ModelSaldo');
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $data1['daftarSaldo'] = $this->ModelSaldo->getSaldo1();
        $this->load->model('ModelTabelUser');
         $data['user_list'] = $this->ModelTabelUser->getAllUser2();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/tabelSaldo', $data1);
	}

	public function insertData()
	{
		$this->load->model('ModelSaldo');
		$this->ModelSaldo->insertSaldo();
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelSaldo/', 'refresh');
	}

	public function delete($id)
    {

        $this->load->model('ModelSaldo');
        // $id = $this->input->post('idAdmin'); 
        $this->ModelSaldo->delete($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelSaldo/daftarSaldo', 'refresh');
    }

    public function createPdf()
	{
		$this->load->model('ModelSaldo');
		$this->load->library('pdf');     
		$data['daftarSaldo'] = $this->ModelSaldo->getAllSaldo();
		$this->pdf->load_view('TabelSaldo',$data);
	}

}

/* End of file TabelSaldo.php */
/* Location: ./application/controllers/TabelSaldo.php */