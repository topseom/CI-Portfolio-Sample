<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class Rules extends REST_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('rules_m');
	}
    public function index_get($id){
        if($id){
            //$this->response('as');
            $data = $this->db
                 ->select('r.day,r.paid,o.*')
                 ->from('rules as r')
                 ->join('options as o','r.id = o.rule_id','left')
                 ->where('r.id',$id)
                 ->get()
                 ->result_array();
            $this->response($data);
        }else{
            $this->response(false,REST_Controller::HTTP_BAD_REQUEST);
        }
    }
	public function index_post(){
        $data = $this->post();
        $id = $this->rules_m->addRule($data);
        if($id){
            $this->response($id,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
    }
    public function index_delete($id){
        $id = $this->rules_m->deleteRule($id);
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
			$rule = $this->rules_m->updateRule($data);
			$this->response($rule,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
    }

    public function option_post()
    {
        $data = $this->post();
        //$this->response($data);
        $id = $this->rules_m->addOption($data);
        if($id){
            $this->response($id,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
    }
    public function option_delete($id){
        $id = $this->rules_m->deleteOption($id);
        if($id){
            $this->response($id,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
    }
    public function option_patch()
    {
        $data = $this->patch();
        if($data){
			$rule = $this->rules_m->updateOption($data);
			$this->response($rule,REST_Controller::HTTP_OK);
		}else{
			$this->response(false,REST_Controller::HTTP_BAD_REQUEST);
		}
    }
    

}
