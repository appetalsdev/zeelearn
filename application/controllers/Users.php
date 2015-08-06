<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		 parent::__construct();
		 $this->load->library('session');
		 $this->load->model('user_model');
	}
	public function index()
	{
		$this->load->view('users/users');
	}
	
	public function managers()
	{
		$this->load->view('users/users');
	}
	
	public function adduserview()
	{
		$this->load->view('users/adduser');
	}
	public function adduser()
	{
		$result = $this->user_model->addUser();  
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}
	
	public function viewusers()
    {  
       $data = $this->user_model->getUsers();
       $this->output->set_content_type('application/json')->set_output(json_encode($data));       
    }
	
	public function checkusername()
	{
		$data = $this->user_model->checkUserUnique($this->input->get('value'), 'username');
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	
	public function userdetails()
    {        
		$userId = $this->input->post('pid');
        $user = $this->user_model->fetchUserDetails($userId);        
        $this->output->set_content_type('application/json')->set_output(json_encode($user));        
    } 
	
	public function edituser()
    {        
        $result = $this->user_model->editUser();        
        $this->output->set_content_type('application/json')->set_output(json_encode($result));        
    } 
	
	public function deleteuser()
    {        
        $result = $this->user_model->deleteUser();        
        $this->output->set_content_type('application/json')->set_output(json_encode($result));        
    } 
	
	public function getroles()
	{
		$result = $this->user_model->getRoles();        
        $this->output->set_content_type('application/json')->set_output(json_encode($result));        
	}
	
	public function checkemail()
	{
		$data = $this->user_model->checkUserUnique($this->input->get('value'), 'email');
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	
	public function changepass()
    {        
        $result = $this->user_model->changePassword();        
        $this->output->set_content_type('application/json')->set_output(json_encode($result));        
    }
       
	public function getschools()
	{
		$result = $this->user_model->getSchoolList();        
        $this->output->set_content_type('application/json')->set_output(json_encode($result));        
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */