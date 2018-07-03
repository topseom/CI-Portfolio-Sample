<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

    public function __construct()
	{
		parent::__construct();
		$this->load->helper('phpass');
    }
    
    public function loginUser($data){
        $hasher = new PasswordHash(8,false);
        $user = $this->db->where('email',$data['email'])->get('users')->row();
        if($user){
            if($hasher->CheckPassword($data['password'],$user->password)){
                unset($user->password);
                return $user;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    
    public function addUser($data){
        $hasher = new PasswordHash(8,false);
        $hash_password = $hasher->HashPassword($data['password']);
        $data['password'] = $hash_password;
		$id = $this->db->insert('users',$data);
		if($id){
            return $id;
		}else{
            return false;
		}
    }

}