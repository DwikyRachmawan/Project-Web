<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
    
    }

    public function index()
    {
        $data = array();
        $this->load->view('v_index', $data);
    }
    public function about()
    {
        
        $data = array();
        $this->load->view('v_about', $data);
    }

	public function contact()
    {
        
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'komentar' => $this->input->post('komentar'),
        );
        $this->db->insert('pesan', $data);
        $this->load->view('v_contact', $data);
    }

	public function menu()
    {
        
        $data = array();
        $this->load->view('v_menu', $data);
    }

	public function reservation()
    {
        
        $data = array();
        $this->load->view('v_reservation', $data);
    }

	public function service()
    {
        
        $data = array();
        $this->load->view('v_service', $data);
    }

	public function testimonial()
    {
        
        $data = array();
        $this->load->view('v_testimonial', $data);
    }

    public function login_form()
    {
        $data = array();
        $this->load->view('v_login_form', $data);
    }
    public function login()
    {
        if ($this->session->userdata('email')){
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'Alamat Email','required|trim|valid_email',
            [
                'required'=>'Email Harus Di Isi', 
                'valid_email'=>'Email Tidak Benar', 
            ]
        );
        $this->form_validation->set_rules('password','Password','required|trim',
        [
            'required'=>'Password Harus Di Isi', 
        ]
    );
    if ($this->form_validation->run()==false)
    {
        $data['user']='';
        $this->load->view('v_login_form');
    }
}    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
}