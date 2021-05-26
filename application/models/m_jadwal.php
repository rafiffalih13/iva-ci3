<?php
class M_jadwal extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function create_jadwal()
	{
		$data = array(
			'pasien' => $this->input->post('nama'),
			'waktu' => $this->input->post('waktu'),
		);

		return $this->db->insert('jadwal', $data);
	}

	public function get_jadwal()
	{
		$this->load->helper('date');
		$now =  date("Y-m-d");
		$this->db->order_by('waktu', 'ASC');
		// $this->db->where("(waktu >= " . now() . ")");
		$query = $this->db->get_where('jadwal', "(waktu >= '" . $now . "')");

		return $query->result_array();
	}

	public function get_first()
	{
		$this->load->helper('date');

		$this->db->select('waktu');
		$this->db->order_by('waktu', 'ASC');
		$this->db->where("(waktu >= " . now() . ")");
		$query = $this->db->get('jadwal');

		return $query->first_row();
	}

	public function get_last()
	{
		$this->load->helper('date');

		$this->db->select('waktu');
		$this->db->order_by('waktu', 'ASC');
		$this->db->where("(waktu >= " . now() . ")");
		$query = $this->db->get('jadwal');

		return $query->last_row();
	}

	// public function delete_post($id){
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('posts');
	// 	return true;
	// }
	// public function GetUserByUsname($usname)
	// {
	// 	$this->db->where('username', $usname);
	// 	$query = $this->db->get('users');
	// 	return $query->row();
	// }
}
