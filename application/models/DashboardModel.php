<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

 	public function getPenjualan()
    {
        
        $tgl=date('Y-m-d');
        $this->db->where('tanggalPesan', $tgl);
       $this->db->select('SUM(totalHarga) as total');
        $query = $this->db->get('pembelian');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
   public function getTiket()
    {
         $tgl=date('Y-m-d');
        $this->db->where('tanggalPesan', $tgl);
       $this->db->select('count(noKursi) as total');
       $this->db->from('pembelian');
       $this->db->join('detailPembelian', 'detailPembelian.noPembelian = pembelian.noPembelian', 'left');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }
    }
     public function getSaldo()
    {
        $tgl=date('Y-m-d');
        $this->db->where('tanggalBeli', $tgl);
        $this->db->where('status', "dikonfirmasi");


       $this->db->select('sum(jumlah) as total');
       $this->db->from('saldo');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }
    }
     public function getUser()
    {
        $this->db->where('level', "user");
               $this->db->select('count(username) as total');
        $query = $this->db->get('useradmin');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
     public function getAdmin()
    {
        $this->db->where('level', "admin");
             $this->db->select('count(username) as total');
        $query = $this->db->get('useradmin');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
   public function getTotalPenjualan()
    {
       
             $this->db->select('count(no) as total');
        $query = $this->db->get('detailPembelian');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    public function getTotalFilm()
    {
       
             $this->db->select('count(noFilm) as total');
        $query = $this->db->get('film');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    public function getKonfirmasi()
    {
       $this->db->where('status', "belum dikonfirmasi");
             $this->db->select('count(idTransaksi) as total');
        $query = $this->db->get('saldo');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function infoSaldo(){
        
        $this->db->where('status', "belum dikonfirmasi");
        $this->db->from('saldo');
        $this->db->join('useradmin', 'useradmin.idUserAdmin = saldo.username', 'left');
        $query = $this->db->get();
        return $query->result();

    }

    public function film(){
        $query = $this->db->query("SELECT  film.noFilm, film.judulFilm, COUNT(detailpembelian.noPembelian) as total1 FROM detailpembelian LEFT JOIN pembelian on pembelian.noPembelian=detailpembelian.noPembelian LEFT JOIN jadwalfilm on jadwalfilm.idJadwal= pembelian.idJadwal RIGHT JOIN film on film.noFilm = jadwalfilm.noFilm GROUP by film.noFilm");
        return $query->result();

     }
     public function tayang(){
         $query = $this->db->query("SELECT film.noFilm , (COUNT(jadwalfilm.idJadwal) * datastudio.jumlahKursi) as total2 from film LEFT JOIN jadwalfilm ON jadwalfilm.noFilm = film.noFilm LEFT JOIN datastudio on jadwalfilm.idStudio=datastudio.idStudio GROUP by film.noFilm");
          return $query->result();
     }

}
?>