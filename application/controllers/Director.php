<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Director: A rendezők kezelését látja el.
 *
 * @author M4rK
 */
class Director extends CI_Controller{ // egy kontroller a CI_Controllerrel közvetve/közvetlen szülő-gyermek kapcsolatban áll
    
    // A Controller rendelkezik publikus, paraméter nélküli konstruktorral 
    public function __construct(){
        parent::__construct();
        
        if(!$this->ion_auth->logged_in()){
            redirect(base_url());
        }
        
        $this->load->model('director_model');
    }
    
    // az egyes funkcioknak publikus metodusokat szentelunk 
    // publikus => böngészőn keresztül linkkel elérhető
    
    public function index($director_id = NULL) 
    {   
        $this->load->helper('url');  
        if($director_id == NULL){
            $errors = [];
            if($this->session->has_userdata('errors')){
                $errors = $this->session->userdata('errors');
                $this->session->unset_userdata('errors');
            }
            // a listázásban a nézet számára szükség van a h1 értékre és a rekord listára
            // a vezérlő átküldi azokat az adatokat a nézet számára, amelyekkel dolgoznia kell
        $view_params = [
            'title'     => 'Rendezők listája',
            'records'   => $this->director_model->get_list(),
            'errors' => $errors
        ];
        // A CI_Controller biztosít egy load mezőt, amelyen keresztül a "segédeket" be tudom 
        // tölteni funkció szerint.

        $this->load->view('director/list', $view_params);
        }
        else{
            if(!is_numeric($director_id)){ 
                show_error('Nem helyes paraméterérték!');
            }
            
            
            $record = $this->director_model->get_one($director_id);
            
            
            if($record == NULL || empty($record)){
                show_error('Az ID-vel nem létezik aktív rekord');
            }
            
            $view_params = [
                'title' => 'Részletes rekordadatok',
                'record' => $record
            ];
            $this->load->view('director/show', $view_params);
        }

    }
    
    public function insert() 
    { 
        
        if(!$this->ion_auth->in_group(['admin','director_manager'], false, )){
            redirect(base_url());
        }
        
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('director_name', 'Rendező neve', 'required|min_length[2]');
        
        if($this->form_validation->run() == TRUE){
            $name = $this->input->post('director_name');
            $description = !empty($this->input->post('director_description')) ? $this->input->post('director_description') : NULL;
            $birthyear = $this->input->post('director_birthyear');
            
            $id = $this->director_model->insert($name,$description,$birthyear);
            if($id){
                $this->load->helper('url');
                redirect(base_url('director/list/'.$id));
            }
            else{
                show_error('Hiba a beszúrás során!');
            }
        }
        else{
        $this->load->helper('form');
        $this->load->view('director/add');
        }
        
    }
    
    public function update($director_id = NULL) 
    { 
        $this->load->helper('url');
        if($director_id == NULL){
            redirect(base_url('director/list'));
        }
        
        if(!is_numeric($director_id)){
            redirect(base_url('director/list'));
        }
        
        $record = $this->director_model->get_one($director_id);
        if($record == NULL || empty($record)){
            redirect(base_url('director/list'));
        }
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('director_name', 'Rendező neve', 'required|min_length[2]');
        $this->form_validation->set_rules('director_birthyear', 'Rendező születési éve', 'required');
        
        if($this->form_validation->run() == TRUE){
            $name = $this->input->post('director_name');
            $description = !empty($this->input->post('director_description')) ? $this->input->post('director_description') : NULL;
            $birthyear = $this->input->post('director_birthyear');
            
            if($this->director_model->update($director_id,$name,$description,$birthyear)){
                redirect(base_url('director/list'));
            }
            else{
                show_error('Sikertelen frissítés!');
            }
        }
        else{
        
        $view_params = [
            'record' => $record
        ];
        
        $this->load->helper('form');
        $this->load->view('director/edit', $view_params);
        }
    }
    
    public function delete($director_id = NULL) 
    { 
        
        if(!$this->ion_auth->is_admin()){
            $errors = [
                'Nincs jogosultságod a rendezők törléséhez! Ezt csak admin jogú felhasználó teheti meg!'
            ];
            
            $this->session->set_userdata(['errors' => $errors]);
            redirect(base_url());
        }
        $this->load->helper('url');
        if($director_id == NULL){
            redirect(base_url('director/list/'));
        }
        
        if(!is_numeric($director_id)){
            redirect(base_url('director/list/'));
        }
        
        $record = $this->director_model->get_one($director_id);
        if ($record == NULL || empty($record)) {
            redirect(base_url('director/list/'));
        }
        
        if($this->director_model->delete($director)){
            redirect(base_url('director/list/'));
        }
        else{
            show_error('A törlés sikertelen!');
        }
        
    }
    
    
}
