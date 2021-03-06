<?php

class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct(); // es lo primero que se ejecuta
        $this->load->model('Usuario_model'); //Con esto se llama al modelo
        $this->load->model('Ciudad_model');
        $this->load->helper('url'); //Para manejar las rutas de las paginas
        $this->load->library('session');
        if ($this->session->userdata('login')){
            
        }else{
            redirect(base_url()."index.php/login");
        }
    }
    public function index(){
       $data["Usuario"]=  $this->Usuario_model->list_all();
       
        $this->load->view('Usuario_index',$data);
    }
   

    public function nuevo (){
        $data["ciudad"]=  $this->Ciudad_model->list_all();
        $this->load->view('usuario_nuevo',$data);
        
        
    }
    public function save(){
        $nombre=  $this->input->post('nombre');
        $apepat=  $this->input->post('apepat');
        $ciudad_id=  $this->input->post('ciudad_id');
        $this->Usuario_model->save($nombre,$apepat,$ciudad_id);
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
