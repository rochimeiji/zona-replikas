<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class front extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('timeline');
		$this->session->set_userdata(array('role'=>'siswa','id_user'=>2));
	}
	function index(){
		$this->session->set_userdata('nav','Timeline');
		$data['page'] = "front/index";
		$data['content'] = "part/work";
		$this->load->view('main',$data);
	}
	function blog(){
		$this->session->set_userdata('nav','Exkul');
		$data['page'] = "front/blog";
		$data['content'] = "part/blog";
		$this->load->view('main',$data);
	}
	function contact(){
		$this->session->set_userdata('nav','Contact');
		$data['page'] = "front/contact";
		$data['content'] = "part/profil";
		$this->load->view('main',$data);
	}
	function project(){
		$data['page'] = "front/project";
		$data['content'] = "part/work";
		$this->load->view('main',$data);
	}
	function timeline(){
		$this->session->set_userdata('nav','Timeline');
		$data['get_posting'] = $this->timeline->get_posting();
		$data['page'] = "front/timeline";
		$data['content'] = "part/work";
		$this->load->view('main',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */