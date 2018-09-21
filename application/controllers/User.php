<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends API_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	function getAll() {
		$data = $this->user_model->getAll();
		$this->response($data);
	}

	function get() {
		$id = $this->uri->segment(4);
		$user = $this->user_model->get($id);
		$this->response($user);
	}

	function insert() {
		$request = $this->request();
		$user = (object) array(
			'name' => $request->name,
			'email' => $request->email,
			'state' => 'A'
		);
		$data = $this->user_model->insert($user);		
		$this->response($data);
	}

	function update() {
		$request = $this->request();
		$user = (object) array(
			'id' => $request->id,
			'name' => $request->name,
			'email' => $request->email,
		);
		$data = $this->user_model->update($user);		
		$this->response($data);
	}

	function delete() {
		$request = $this->request();
		$user = (object) array(
			'id' => $request->id
		);
		$data = $this->user_model->delete($user);		
		$this->response($data);
	}


}
