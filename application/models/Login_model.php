<?php

class Login_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->Load->database();
    }
    
    public function validar($username,$password){
        $query=$this->db->query("select * from Usuario where username='".$username."'");
        $result=$query->result_object();
        $this->db->close();
        foreach ($result as $usuario){
            if($usuario->password==$password){
                return true;
            }else{
                return false;
            }
        }
    }
}

