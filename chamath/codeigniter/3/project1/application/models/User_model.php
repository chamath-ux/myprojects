<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	/**
	 * Create a new model instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Get all records.
	 *
	 * @param $withTrashed
	 * @return mixed
	 */
	public function all($withTrashed = TRUE)
	{
		$this->db->select(
			'user.user_id, ' .
			'user.role_id, ' .
			'user.username, ' .
			'user.name, ' .
			'user.email, ' .
			'user.created_at, ' .
			'user.updated_at, ' .
			'user.deleted_at, ' .
			'role.name AS role_name'
		);
		if (!$withTrashed) {
			$this->db->where('user' . '.deleted_at', NULL);
		}
		$this->db->join('role', 'role.role_id = user.role_id', 'left');
		$query = $this->db->get('user');

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
	 * @param $withTrashed
	 * @return mixed
	 */
	public function single($id, $withTrashed = TRUE)
	{
		$this->db->select(
			'user.user_id, ' .
			'user.role_id, ' .
			'user.username, ' .
			'user.name, ' .
			'user.email, ' .
			'user.created_at, ' .
			'user.updated_at, ' .
			'user.deleted_at, ' .
			'role.name AS role_name'
		);
		$this->db->where('user.user_id', $id);
		if (!$withTrashed) {
			$this->db->where('user.deleted_at', NULL);
		}
		$this->db->join('role', 'role.role_id = user.role_id', 'left');
		$query = $this->db->get('user');

		// Counting result from query
		$count = $query->num_rows();

		if ($count === 0) {
			return FALSE;
		} else {
			return $query->row_array();
		}
	}


	/**
	 * Create a record.
	 *
	 * @return mixed
	 */
	public function store_single()
	{
		// Get post data
		$data = array(
			'role_id' => trim($this->input->post('role')),
			'username' => trim($this->input->post('username')),
			'password' => sha1(trim($this->input->post('password'))),
			'name' => trim($this->input->post('name')),
			'email' => trim($this->input->post('email')),
		);

		$this->db->trans_start();
		$this->db->insert('user', $data);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			return FALSE;
		} else {
			return TRUE;
		}
	}


	/**
	 * Update a record.
	 *
	 * @return mixed
	 */
	public function update_single()
	{
		//Get post data
		$data = array(
			'user_id' => trim($this->input->post('id')),
			'role_id' => trim($this->input->post('role')),
			'username' => trim($this->input->post('username')),
			'name' => trim($this->input->post('name')),
			'email' => trim($this->input->post('email')),
		);

		// If password is set
		if (trim($this->input->post('password')) != "") {
			$data['password'] = sha1(trim($this->input->post('password')));
		}

		$this->db->trans_start();
		$this->db->where('user_id', trim($this->input->post('id')));
		$this->db->update('user', $data);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			return FALSE;
		} else {
			return TRUE;
		}
	}


	/**
	 * Delete a record.
	 *
	 * @param $id
	 * @return bool
	 */
	public function destroy_single($id)
	{
		// Set data
		$data = array(
			'deleted_at' => unix_to_human(now('Asia/Colombo')),
		);

		$this->db->trans_start();
		$this->db->where('user_id', trim($id));
		$this->db->update('user', $data);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			return FALSE;
		} else {
			return TRUE;
		}
	}


	/**
	 * Restore a record.
	 *
	 * @param $id
	 * @return bool
	 */
	public function restore_single($id)
	{
		// Set data
		$data = array(
			'deleted_at' => NULL,
		);

		$this->db->trans_start();
		$this->db->where('user_id', trim($id));
		$this->db->update('user', $data);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
