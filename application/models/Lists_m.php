<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists_m extends CI_Model {

    public function __construct()
	{
		parent::__construct();
    }

    public function todayUserID($id){
        $hour = 12;
        $today = strtotime($hour.':00:00');
        return $this->db->where('created_by',$id)->where('created >=',$today)->get('lists')->result_array();
    }
    
    public function addList($data){
        $id = $this->db->insert('lists',$data);
        if($id){
            return $id;
        }else{
            return false;
        }
    }
    public function deleteList($id){
        $id = $this->db->where('id',$id)->delete('lists');
        if($id){
            return $id;
        }else{
            return false;
        }
    }

    public function updateList($data){
        if($data['income']){
            $this->db->set('income',$data['income']);
        }
        if(isset($data['expense'])){
            $this->db->set('expense',$data['expense']);
        }
        $id = $this->db->where('id',$data['id'])->update('options');
        if($id){
            return $id;
        }else{
            return false;
        }
    }

    

}