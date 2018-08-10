<?php 


class Model extends CI_Model 

{

	public function get($table){
		$result = $this->db->get($table);
		return $result;
	}

	public function get_where($table,$where) { 

		return $this->db->get_where($table,$where);

	}

	public function save($tabel,$data)
	{
		$this->db->insert($tabel, $data);
		return $this->db->insert_id();
	}

	public function update_ajax($table, $where, $data)
	{

		$this->db->where($where);
		$this->db->update($table,$data);

	}


	// public function rawQuery($query){

	// 	$this->load->database();
	// 	$result = $this->db->query($query);
	// 	$this->db->close();
	// 	return $result;
	// }

	public function get_by_id($table,$where)
	{
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();

		return $query->row();
	}

	public function delete_by_id($table,$where)

	{
		$this->db->where($where);
		$this->db->delete($table);
	}





}




?>	