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
class Genre_model  extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list()
    {
        $this->db->select('g.id, g.name, d.name director_name');
        $this->db->from('genres g');
        $this->db->join('directors d', 'd.id = g.director_id', 'inner');
        $this->db->order_by('d.name', 'ASC');
        $this->db->order_by('g.name', 'ASC');
        
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
        
        $this->db->select('g.id, g.name, g.description');
        $this->db->from('genres g');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    }
    
