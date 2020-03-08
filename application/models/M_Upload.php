<?php
class M_Upload extends CI_Model{
    function __construct()
    {
        # code...
        parent::__construct();
    }
    function upload($data = array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        
        // parent::Model();
        $this->load->database();
        $this->load->database();
        $query = $this->db->query(
            'SELECT * from gambar'
        );
        return $this->db->insert_batch('gambar',$data,$query->result());
    }
    function getAll(){
        $this->load->database();
        $query = $this->db->query(
            'SELECT * from gambar ORDER BY id DESC'
        );
        return $query->result();
    }
}
