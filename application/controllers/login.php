<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
		
	}
	function index(){
		$data['page'] = 'login';
		$data['content'] = "part/work";
		$this->load->view('main',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */