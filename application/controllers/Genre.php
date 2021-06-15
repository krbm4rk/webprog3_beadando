<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Genre
 *
 * @author M4rK
 */class Genre extends CI_Controller{
   
    public function __construct() {
        parent::__construct();
        
        //$this->load->helper('url');
        $this->load->model('genre_model', 'g_model');
    }
    
    public function list()
    {
        $view_params = [
            'title' =>  'Műfajok listája',
            'records'   =>  $this->g_model->get_list()
        ];
        
        $this->load->view('genre/list', $view_params);
        
    }
    
    
    public function insert() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Műfaj neve', 'required');
        $this->form_validation->set_rules('description', 'Műfaj leírása', 'required');
        $this->form_validation->set_rules('director_id', 'Rendező neve', 'required');
        
        
        if($this->form_validation->run() === TRUE)
        {
            if($this->g_model->insert(
                    $this->input->post('director_id'),
                    $this->input->post('name'),
                    $this->input->post('description')
            )){
                redirect(base_url('director/list'));
            }
        }
        else{
        $this->load->helper('form');
        
        $this->load->model('director_model');
        $list = $this->director_model->get_list();
        $directors = [];
        
        foreach ($list as &$item){
            $directors[$item->id] = $item->name;
        }
        $view_params = [
            'directors' => $directors
        ];
        
        $this->load->view('genre/insert', $view_params);
        } 
    }
    
    public function update() {
        
    }
    
    public function delete() {
        
    }
}
