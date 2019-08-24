<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Home extends MY_Controller
{  
    public function __construct()
   {
        parent::__construct();
        if(!$this->session->userdata('username'))
        {
            redirect('login');
        }
        $this->halaman ='Home';
   }

   public function index($page =null)
   {
       $maxid = 0;
       $row = $this->db->query('SELECT COUNT(*) AS 'maxid' FROM 'transaksi'')->row();
       if ($row){
           $maxid = $row->maxid;
       }
       $pemasukkan = 0;
       $row = $this->db->query('SELECT SUM(total) AS 'pemasukkan' FROM 'transaksi'')->row();
       if ($row){
           $pemasukkan = $row->pemasukkan;
       } 
       $jumlah =0;
       $row = $this->db->query('SELECT SUM(jumlah) AS 'jumlah' FORM 'transaksi'')->row();

       if ($row){
           $jumlah = $row->jumlah;
       }
       $halaman     =$this->halaman;
       $numbarang   =$this->db->get('barang')->num_rows();
       $numtransaksi=$this->db->get('transaksi')->num_rows();
       $main_view   = 'home/index';
       $this->load->view('template', compact('jumlah', 'pemasukkan', 'maxid', 'numbarang', 'numtransaksi', 'halaman', 'main_view'));
   }

   public function show_calender(){
       $this->load->library('calendar');
       $kalender = $this->calendar->generate();
       $data = array('kalender' => $kalender);
       $this->load->view('sidebar', $data);
   }
}
?>
