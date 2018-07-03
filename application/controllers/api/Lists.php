<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class Lists extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lists_m');
	}
	public function today_get($id){
		if($id){
			$data = $this->lists_m->todayUserID($id);
			echo "<pre>";print_r($data);exit;
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	public function index_post(){
		$data = $this->post();
        $id = $this->lists_m->addList($data);
        if($id){
            $this->response($id,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	
	public function index_delete($id){
        $id = $this->lists_m->deleteList($id);
        if($id){
            $this->response($id,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	public function index_patch()
	{
        $data = $this->patch();
        if($data){
			$list = $this->lists_m->updateList($data);
			$this->response($list,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
    }

}
