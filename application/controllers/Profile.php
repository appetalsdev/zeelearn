<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('profile/profile');
			
		}
		else
		{
		 //If no session, redirect to login page
		 redirect('login', 'refresh');
		}
	}
	
	public function dashboard()
	{
		$this->load->view('profile/dashboard');
	}
	
	public function account()
	{
		$this->load->view('profile/account');
	}
	
	public function get_user_profile_data()
	{
		$userId = $this->session->userdata['logged_in']['userid'];
		$data = $this->user_model->fetchUserDetails($userId);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}