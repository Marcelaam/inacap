<?php

class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct(); // es lo primero que se ejecuta
        $this->load->model('Usuario_model'); //Con esto se llama al modelo
        $this->load->helper('url'); //Para manejar las rutas de las paginas
    }
    public function index(){
       $data["Usuario"]=  $this->Usuario_model->list_all();
        $this->load->view('Usuario_index',$data);
    }
    public function nuevo (){
        $this->load->view('usuario_nuevo');
        
        
    }
    public function save(){
        $nombre=  $this->input->post('nombre');
        
        $apepat=  $this->input->post('apepat');
        
        $this->Usuario_model->save($nombre,$apepat);
        redirect('usuario');
    }
    public function delete ($usuario_id){
        $this->Usuario_model->delete($usuario_id);
        redirect('usuario');
        
    }
    public function detail($usuario_id){
       $data["usuario"]=$this->Usuario_model->find_by_id($usuario_id);
       $this->load->view('usuario_detail',$data);
        
    }
    
}
