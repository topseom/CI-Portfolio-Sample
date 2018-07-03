<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		//$this->load->library('cloudinarylib');
	}
	
	public function index()
	{
		//echo "<pre>";print_r(112233);exit;
		$this->load->view('market');
	}
}
