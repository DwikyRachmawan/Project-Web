<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
  function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_data');
		
		
	}

public function index()
    {
      $data['title'] = 'Dashboard';

      $data['user'] = $this->M_data->ambil_data()->result();
      $this->load->view('admin/v_header',$data);
      $this->load->view('admin/v_index',$data);
      $this->load->view('admin/v_footer',$data);
    }
    function tables(){
     

      $data['pesan'] = $this->M_data->ambil_komen()->result();
      $this->load->view('admin/v_header');
      $this->load->view('admin/v_tables', $data);
      $this->load->view('admin/v_footer');
    }
    function hapus($id)
    {
        $where=array('id' => $id);
        $this->M_data->hapus_data($where, 'user');
        redirect('admin/index');
    }
    function edit($id)
    {
        $where=array('id' => $id);
        $data['user'] = $this->M_data->edit_data($where, 'user')->result();
        $this->load->view('admin/v_edit', $data);
        
    }
    public function card()
    {
        $data['title'] = 'my Profile';
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/v_card',$data);
}
function delete($id)
    {
        $where=array('id' => $id);
        $this->M_data->hapus_data($where, 'pesan');
        redirect('admin/tables');
    }
    function ubah($id)
    {
        $where=array('id' => $id);
        $data['komentar'] = $this->m_data->edit_data($where, 'komentar')->result();
        $this->load->view('admin/v_edit', $data);
       
        
    }

}