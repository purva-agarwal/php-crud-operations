<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {
	public function index()
	{
		//$this->load->database();
		$select_query = $this->db->get("schools");
		$data['records'] = $select_query->result();
		$this->load->view('schools/index', array('records'=>$data['records']));
	}

	public function create()
	{
		$this->load->view('schools/form');
	}

	public function store()
	{
		//$this->load->database();
		print_r($_POST);
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$data = array('name' => $name, 'description' => $description, 'state' => $state, 'city' => $city);
		$this->db->insert('schools',$data);
		$last_id = $this->db->insert_id();
		redirect(BASE_URL.'/schools/view/'.$last_id);
	}

	public function edit($id)
	{
		print_r($id);
		$this->db->select('*');
		$this->db->from('schools');
		$this->db->where('schools_id',$id);
		$query=$this->db->get();
		$record = $query->row_array();
		$this->load->view('schools/update_form',array('record'=>$record));
	}

	public function update($id)
	{
		print_r($_POST);
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$data = array('name' => $name, 'description' => $description, 'state' => $state, 'city' => $city);
		$this->db->set($data);
		$this->db->where('schools_id',$id);
		$this->db->update('schools');
		redirect(BASE_URL.'/schools/view/'.$id);


	}

	public function view($id)
	{
		$this->db->select('*');
		$this->db->from('schools');
		$this->db->where('schools_id',$id);
		$query=$this->db->get();
		$record = $query->row_array();
		$this->load->view('schools/view',array('record'=>$record));
	}

	public function delete($id)
	{
		$this->db->where('schools_id',$id);
		$this->db->delete('schools');
		redirect('/schools');
	}


}
