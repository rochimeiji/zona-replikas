<?php
class all extends CI_Model{
	function role($id=""){
		$result = false;
		if($this->session->userdata('role')=="admin"){
			$result = true;
		}elseif($this->session->userdata('role')=="siswa"){
			if($this->session->userdata('id_user')==$id){
				$result = true;
			}
		}
		
		return $result;
	}
}
?>