<?php
class timeline extends CI_Model{
	function get_posting(){
		//cache
		$this->db->start_cache();
			$this->db->join('user','user.id_user=posting.id_user');
			$this->db->from('posting');
		$this->db->stop_cache();
		
			$result = $this->db->get()->result_array();
		$this->db->flush_cache();
		return $result;
	}
	function get_komentar($id){
		//cache
		$this->db->start_cache();
			$this->db->join('posting','posting.id_posting=komentar.id_target');
			$this->db->join('user','user.id_user=komentar.id_user');
			$this->db->where('id_target',$id);
			$this->db->from('komentar');
		$this->db->stop_cache();
		
			$result = $this->db->get()->result_array();
		$this->db->flush_cache();
		return $result;
	}
}
?>