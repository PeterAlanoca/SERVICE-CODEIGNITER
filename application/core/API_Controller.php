<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API_Controller extends CI_Controller {

	function request() {
		return (object) json_decode(file_get_contents('php://input'), true);
	}

	function response($data){
		$response = array(
			'data' => $data,
			'state' => 1,
			'message' => 'success'
		);
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('Content-Type: application/json');
		print_r(json_encode($response));
	}
}
?>
