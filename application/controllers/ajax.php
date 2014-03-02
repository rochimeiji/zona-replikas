<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajax extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	function status_edit(){
		$data = array('posting'=>post('posting'));
		$this->db->where('id_posting',1);
		$this->db->update('posting',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */