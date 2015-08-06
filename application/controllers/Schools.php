<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schools extends CI_Controller {

	public function __construct() {
		 parent::__construct();
		 $this->load->library('session');
		 $this->load->model('school_model');
	}
	public function index()
	{
		$this->load->view('schools/schools');
	}
	public function addschoolview()
	{
		$this->load->view('schools/addschool');
	}
	public function addschool()
	{
		$result = $this->school_model->addSchool();  
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}
	
	public function viewschools()
    {  
       $data = $this->school_model->getSchools();
       $this->output->set_content_type('application/json')->set_output(json_encode($data));       
    }
	
	public function checkschool()
	{
		$data = $this->school_model->checkSchool();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	
	public function schooldetails()
    {        
        $school = $this->school_model->fetchSchoolDetails();        
        $this->output->set_content_type('application/json')->set_output(json_encode($school));        
    } 
	
	public function editschool()
    {        
        $result = $this->school_model->editSchool();        
        $this->output->set_content_type('application/json')->set_output(json_encode($result));        
    } 
	
	public function deleteschool()
    {        
        $result = $this->school_model->deleteSchool();        
        $this->output->set_content_type('application/json')->set_output(json_encode($result));        
    } 
       
}

/* End of file Schools.php */
/* Location: ./application/controllers/Schools.php */