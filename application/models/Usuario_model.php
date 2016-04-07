<?php

class Usuario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    //El modelo se utiliza para trabajar con la base d datos, interactua directamente con la BD
    public function list_all(){ //Mostrar usuario
        
        $query=$this->db->query("select usuario.usuario_id,usuario.nombre,usuario.apepat,ciudad.nombre as nomciudad from Usuario,Ciudad where Usuario.ciudad_id=Ciudad.ciudad_id"); //hace una consulta en la BD
        $result=$query->result_object(); //Mostrar el resultado
        $this->db->close();
        return $result;
    }
    
    public function save($nombre,$apepat,$ciudad_id){ //Guardar usuario
        $this->db->query("insert into Usuario(nombre,apepat,ciudad_id) values('".$nombre."','".$apepat."','".$ciudad_id."')");
        $this->db->close();
    }
    
    public function delete($usuario_id){
        $this->db->query("delete from Usuario where usuario_id='".$usuario_id."'");
        $this->db->close();
    }
    
    public function find_by_id($usuario_id){
        $query=$this->db->query("select * from Usuario where usuario_id='".$usuario_id."'");
        $result=$query->result_object(); //Mostrar el resultado
        $this->db->close();
        return $result;
    }
    
}
