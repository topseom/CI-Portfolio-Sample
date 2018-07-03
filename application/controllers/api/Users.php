<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class Users extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_m');
		
	}

	public function index_get($id="")
	{
		if($id){
			$result = $this->db->where('id',$id)->get('users')->row();
		}else{
			$result = $this->db->get('users')->result_array();
		}
		$this->response($result);
	}

	public function index_post()
	{
		$data = $this->post();
		$id = $this->users_m->addUser($data);
		if($id){
			$this->response($id,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	public function index_delete($id="")
	{
		if($id){
			$user = $this->db->where('id',$id)->delete('users');
			$this->response($user,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	public function index_patch()
	{
		$data = $this->patch();
		if($data){
			$user = $this->db->set('title',$data['title'])->where('id',$data['id'])->update('users');
			$this->response($user,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	public function login_post()
	{
		$data = $this->post();
		$user = $this->users_m->loginUser($data);
		if($user){
			$this->response($user,REST_Controller::HTTP_OK);
		}else{
			$this->response($user,REST_Controller::HTTP_UNAUTHORIZED);
		}
	}

}
