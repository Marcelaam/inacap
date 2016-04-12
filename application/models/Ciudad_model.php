<?php

class Ciudad_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
   
    public function list_all(){ 
        $query=$this->db->query("select * from Ciudad"); 
        $result=$query->result_object(); 
        $this->db->close();
        return $result;
    }
    
    public function save($nombre){ 
        $this->db->query("insert into Ciudad(nombre) values('".$nombre."')");
        $this->db->close();
    }
    
    public function delete($ciudad_id){
        $this->db->query("delete from Ciudad where ciudad_id='".$ciudad_id."'");
        $this->db->close();
    }
    
    public function edit($ciudad_id,$nombre){
        $this->db->query("update Ciudad set nombre='".$nombre."'where ciudad_id='".$ciudad_id."'");
        $this->db->close();
    }
    
    public function find_by_id($ciudad_id){
        $query=$this->db->query("select * from Ciudad where ciudad_id='".$ciudad_id."'");
        $result=$query->result_object(); 
        $this->db->close();
        return $result;
    }
    
}


