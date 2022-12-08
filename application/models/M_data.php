<?php
class M_data extends CI_Model{
    function ambil_data()
    {
        return $this->db->get('user');
    }
    function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where, $table){
       return $this->db->get_where($table, $where);
    }
    function ambil_komen()
    {
        return $this->db->get('pesan');
    }
        

}