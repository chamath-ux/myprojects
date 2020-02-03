<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		// Load user model
		$this->load->model('user_model');

		// Load role model
		$this->load->model('role_model');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return void
	 */
	public function index()
	{
		// Get all records
		$records = $this->user_model->all();

		$this->load->view('template/header');
		$this->load->view('manage_users', array('records' => $records));
		$this->load->view('template/footer');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return void
	 */
	public function create()
	{
		// Get all user roles
		$roles = $this->role_model->all();

		$this->load->view('template/header');
		$this->load->view('create_user', array('roles' => $roles));
		$this->load->view('template/footer');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 */
	public function store()
	{
		// Form validation
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[255]|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[255]|trim');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[6]|max_length[255]|trim|matches[password]');
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[255]|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|max_length[255]|valid_email|trim');
		$this->form_validation->set_rules('role', 'Role', 'required|min_length[1]|trim');

		if ($this->form_validation->run() == false) {
			// Get all user roles
			$roles = $this->role_model->all();

			$this->load->view('template/header');
			$this->load->view('create_user', array('roles' => $roles));
			$this->load->view('template/footer');
		} else {
			// Create record
			$result = $this->user_model->store_single();

			if ($result) {
				$this->session->set_flashdata('ok', 'Record created successfully!');
			} else {
				$this->session->set_flashdata('error', 'An error occurred while creating the record!');
			}

			redirect('user');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param $id
	 * @return void
	 */
	public function show($id)
	{
		// Get record
		$record = $this->user_model->single($id);

		// Get all user roles
		$roles = $this->role_model->all();

		$this->load->view('template/header');
		$this->load->view('show_user', array('record' => $record, 'roles' => $roles));
		$this->load->view('template/footer');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param $id
	 * @return void
	 */
	public function edit($id)
	{
		// Get record
		$record = $this->user_model->single($id);

		// Get all user roles
		$roles = $this->role_model->all();

		$this->load->view('template/header');
		$this->load->view('edit_user', array('record' => $record, 'roles' => $roles));
		$this->load->view('template/footer');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @return void
	 */
	public function update()
	{
		// Form validation
		$this->form_validation->set_rules('id', 'ID', 'required|min_length[1]|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[255]|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[255]|trim');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[6]|max_length[255]|trim|matches[password]');
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[255]|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|max_length[255]|valid_email|trim');
		$this->form_validation->set_rules('role', 'Role', 'required|min_length[1]|trim');

		if ($this->form_validation->run() == false) {
			// Get id of the record
			$id = trim($this->input->post('id'));

			// Get record
			$record = $this->user_model->single($id);

			// Get all user roles
			$roles = $this->role_model->all();

			$this->load->view('template/header');
			$this->load->view('edit_user', array('record' => $record, 'roles' => $roles));
			$this->load->view('template/footer');
		} else {
			// Update record
			$result = $this->user_model->update_single();

			if ($result) {
				$this->session->set_flashdata('ok', 'Record updated successfully!');
			} else {
				$this->session->set_flashdata('error', 'An error occurred while updating the record!');
			}

			redirect('user');
		}
	}


	/**
	 * Delete the specified resource in storage.
	 *
	 * @param $id
	 * @return void
	 */
	public function destroy($id)
	{
		// Delete record
		$result = $this->user_model->destroy_single($id);

		if ($result) {
			$this->session->set_flashdata('ok', 'Record deleted successfully!');
		} else {
			$this->session->set_flashdata('error', 'An error occurred while deleting the record!');
		}

		redirect('user');
	}


	/**
	 * Restore the specified resource in storage.
	 *
	 * @param $id
	 * @return void
	 */
	public function restore($id)
	{
		// Restore record
		$result = $this->user_model->restore_single($id);

		if ($result) {
			$this->session->set_flashdata('ok', 'Record restored successfully!');
		} else {
			$this->session->set_flashdata('error', 'An error occurred while restoring the record!');
		}

		redirect('user');
	}
}
