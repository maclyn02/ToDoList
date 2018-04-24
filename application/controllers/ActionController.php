<?php

class ActionController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function index() { 
        $this->load->view('userscreen',$data);
    }
        
    public function login() {
        //Check uname and password
        
        $uname=$this->input->post('uname');
        $upass=$this->input->post('pswd');
        
        $this->db->select('password');
        $this->db->from('user');
        $this->db->where('uname',$uname);
        $query=$this->db->get();
        $record=$query->row();
        if($record=$query->row())
        { 
            if($upass==$record->password)
            {
                if(isset($_POST['remember']))
                {
                    //Set user cookie here
                }
                $this->load->model('User_model');
                $data=array('uname'=>$uname,'tasks'=>$this->User_model->getTaskData($uname));
                $this->load->view('userscreen',$data);
            }
        }
        else
        {
            redirect('Home');
        }
    }
    
    public function register() {
        
        $this->load->model('User_model');
        $data = array (
        'uname'=>$this->input->post('uname'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('pswd')
        );
        $table='user';
        $this->User_model->insert($table,$data);
        redirect('Home');
        
    }
    
    public function addTask() {
        
        $this->load->model('User_model');
        $uname=$this->input->post('uname');
        $data = array (
        'uname'=>$uname,
        'tname'=>$this->input->post('tname'),
        'tdesc'=>$this->input->post('tdesc'),
        'tloc'=>$this->input->post('tlocation'),
        'tdate'=>date('Y-m-d'),
        
        );
        $table='task';
        $this->User_model->insert($table,$data);
        $data=array('uname'=>$uname,'tasks'=>$this->User_model->getTaskData($uname));
        $this->load->view('userscreen',$data);
    }
    
    public function reset() {
        $this->load->view('reset');
    }
    
    public function logout() {
        //clear user session here
        
        redirect('Home');
    }
    
    public function home() {
        redirect('Home');
    }
    
}

?>