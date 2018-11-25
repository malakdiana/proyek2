<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPembelian extends CI_Model {
	public function getAllPembelian()
    {
        $query = $this->db->get('pembelian');
       
            return $query->result();
        
    }
    public function report(){
        $first_date= $this->input->post('mulai');
        $second_date=$this->input->post('selesai');
        $this->db->where('tanggalPesan >=', $first_date);
        $this->db->where('tanggalPesan <=', $second_date);
         $query = $this->db->get('pembelian');
         return $query->result();
    }

    public function delete($id)
    {
        $this->db->where('noPembelian', $id);
        $this->db->delete('pembelian');
    }
	

}

/* End of file ModelPembelian.php */
/* Location: ./application/models/ModelPembelian.php */