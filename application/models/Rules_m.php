<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_m extends CI_Model {

    public function __construct()
	{
		parent::__construct();
    }

    public function addRule($data){
        $id = $this->db->insert('rules',$data);
        if($id){
            return $id;
        }else{
            return false;
        }
    }
    public function deleteRule($id){
        $id = $this->db->where('id',$id)->delete('rules');
        if($id){
            return $id;
        }else{
            return false;
        }
    }
    public function updateRule($data){
        if(isset($data['paid'])){
            $this->db->set('paid',$data['paid']);
        }
        if(isset($data['day'])){
            $this->db->set('day',$data['day']);
        }
        $id = $this->db->where('id',$data['id'])->update('rules');
        if($id){
            return $id;
        }else{
            return false;
        }
    }

    public function addOption($data){
        $id = $this->db->insert('options',$data);
        if($id){
            return $id;
        }else{
            return false;
        }
    }
    public function deleteOption($id){
        $id = $this->db->where('id',$id)->delete('options');
        if($id){
            return $id;
        }else{
            return false;
        }
    }

    public function updateOption($data){
        if($data['title']){
            $this->db->set('title',$data['title']);
        }
        if(isset($data['range_min'])){
            $this->db->set('range_min',$data['range_min']);
        }
        if(isset($data['range_max'])){
            $this->db->set('range_max',$data['range_max']);
        }
        $id = $this->db->where('id',$data['id'])->update('options');
        if($id){
            return $id;
        }else{
            return false;
        }
    }


}