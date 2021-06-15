<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Movie_model
 *
 * @author M4rK
 */
class Director_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        
        $this->load->database();
        
    }
    
    public function get_list(){
        
        $this->db->select('d.id,d.name');
        $this->db->from('directors d');
        $this->db->order_by('d.name','ASC');
        
        return $this->db->get()->result();
    }
    
    public function get_one($id){
        
        $this->db->select('d.id, d.name, d.description, d.birthyear');
        $this->db->from('directors d');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    public function delete($id){
        
        $this->db->where('id',$id);
        return $this->db->delete('directors');
    }
    
    public function insert($name,$description,$birthyear){
        
        $record = [
            'name' => $name,
            'description' => $description,
            'birthyear' => $birthyear
        ];
        
        $this->db->insert('directors', $record);
        return $this->db->insert_id();
    }
    
    public function update($id,$name,$description,$birthyear){
        $record = [
            'name' => $name,
            'description' => $description,
            'birthyear' => $birthyear
        ];
        
        $this->db->where('id', $id);
        return $this->db->update('directors',$record);
    }
}
