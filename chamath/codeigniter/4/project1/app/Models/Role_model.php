<?php

namespace App\Models;

class Role_model extends Model
{

	/**
	 * Get all records.
	 *
	 * @return mixed
	 */
	public function all()
	{
		$this->db->select('*');
		$query = $this->db->get('role');

		// Counting result from query
		$count = $query->num_rows();

		if ($count === 0) {
			return FALSE;
		} else {
			return $query->result_array();
		}
	}


	/**
	 * Get a single record.
	 *
	 * @param $id
	 * @return mixed
	 */
	public function single($id)
	{
		$this->db->select('*');
		$this->db->where('role_id', $id);
		$query = $this->db->get('role');

		// Counting result from query
		$count = $query->num_rows();

		if ($count === 0) {
			return FALSE;
		} else {
			return $query->row_array();
		}
	}
}
