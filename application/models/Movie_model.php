<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Genre_model
 *
 * @author M4rK
 */
class Movie_model  extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list()
    {
        $this->db->select('m.id, m.title, m.description');
        $this->db->from('movies m');
        $this->db->order_by('m.title', 'ASC');
        
        return $this->db->get()->result();
    }
   
    
    public function insert($director_id, $name, $description)
    {
        $record = [
            'director_id' => $director_id,
            'name' => $name,
            'description' => $description
        ];
        
        $this->db->insert('directors', $record);
        return $this->db->insert_id();
    }
    
    
    public function get_one($id)
    {
        
        $this->db->select('m.id, m.title, m.description');
        $this->db->from('movies m');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    }
    
