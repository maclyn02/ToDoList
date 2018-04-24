<?php

class User_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
    
    public function insert($table,$data) {
        $this->load->database();
        $this->db->insert($table,$data);
    }
    
    public function getTaskData($uname) {
         
        $this->db->select('*');
        $this->db->from('task');
        $this->db->where('uname',$uname);
        $query=$this->db->get();
        
        return $query->result_array();
    }
}

?>