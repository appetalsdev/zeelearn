<?php
Class School_model extends CI_Model
{
	function addSchool() {
		$this->load->dbforge();
		$this->load->dbutil();
		
        $userid = $this->session->userdata('userid');
        $now = date("Y-m-d H:i:s");
		
		$data = $this->input->post();
		
		$school_db_name = preg_replace('/\s+/', '_', $data['name']);
		
		$data['db_name'] = $school_db_name;
		
		if ($this->dbutil->database_exists($school_db_name))
		{
		   $data['success'] = false;
           $data['message'] = 'Unable to add school! Please try different name.'; 
		}
		else 
		{
			$res = $this->db->insert('schools', $data);
		
			if($res)
			{
				if ($this->dbforge->create_database($school_db_name))
				{
					$dbres = $this->insertTables($school_db_name);
					$data['success'] = true;
					$data['message'] = " School has been created successfully!" ;   
				}
				else
				{
					$data['success'] = false;
				}
			}
			else 
			{
				$data['success'] = false;
				$data['message'] = 'Unable to add school! Please try again.'; 
			}
			
		}
		
        return $data;
    }
	
	function getSchools() {
		
		$userid = $this->session->userdata('userid');
        
        $order_data = $this->input->post('order_data');
        if ($this->input->post('pageno')) {
            $pgno = $this->input->post('pageno') - 1;
        } else {
            $pgno = 0;
        }
        $limit = $this->config->item('pagination_limit');
        $start = $limit * $pgno;
		/*if ($this->input->post('pageno') == 1)
		{
			$this->db->select('*');
			$this->db->from('schools');
			$this->db->where('deleted', 0);
			$query = $this->db->get();
			$school['num_rows'] = $query->num_rows();
		}*/
        
		$this->db->select('*');
        $this->db->from('schools');
		$this->db->where('deleted', 0);
		
        //$query = $this->db->limit($limit, $start);
        //if ($order_data == 'id')
            $this->db->order_by('id', 'desc');

        $query = $this->db->get();
		$school['num_rows'] = $query->num_rows();
        if ($query->num_rows() > 0) {
            $school = $query->result_array();
        } else {
            $school = '';
        }

        return $school;
    }
	
	function checkSchool()
	{
		$values = $this->input->get();
		
		$this->db->select('name');
        $this->db->from('schools');
		$this->db->where('name', $values['value']);
		if(isset($values['city']))
			$this->db->where('city', $values['city']);
		$query = $this->db->get();
		
		if($query->num_rows() >0) 
		{
			$data['status'] = $query->num_rows();
		}
		else 
		{
			$data['status'] = 0;
		}
		return $data;
	}
	
	function fetchSchoolDetails()
	{
		$pid = $this->input->post('pid');
        $userid = $this->session->userdata('userid');
		
		$this->db->select('*');
        $this->db->from('schools');
		$this->db->where(array('id'=>$pid, 'deleted'=>'0'));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
            $school['data'] = $query->row();
        } else {
            $school['data'] = '';
        }

		return $school;
	}
	
	function editSchool()
	{
		$userid = $this->session->userdata('userid');
        $now = date("Y-m-d H:i:s");
		
		$data = $this->input->post();
		
		$this->db->where('id', $data['id']);
		array_shift($data);
		$res = $this->db->update('schools', $data);
				
        if($res)
        {
            $data['success'] = true;
            $data['message'] = " School has been updated successfully!" ;                        
		}
        else 
        {
            $data['success'] = false;
            $data['message'] = 'Unable to update school! Please try again.'; 
        }
        return $data;
	}
	
	function deleteSchool()
	{
		$userid = $this->session->userdata('userid');
		$now = date("Y-m-d H:i:s");
		
		$id = $this->input->post('id');
		$data = array(
            'deleted' => 1
        );
		
		$this->db->where('id', $id);
		$res = $this->db->update('schools', $data);
				
		if($res)
        {
            $data['success'] = true;
            $data['message'] = " School has been deleted successfully!" ;                        
		}
        else 
        {
            $data['success'] = false;
            $data['message'] = 'Unable to delete school! Please try again.'; 
        }
        return $data;
	}
	
	function insertTables($school_db)
	{
		$config['hostname'] = $this->db->hostname;
		$config['username'] = $this->db->username;
		$config['password'] = $this->db->password;
		$config['database'] = $school_db;
		$config['dbdriver'] = $this->db->dbdriver;
		$config['dbprefix'] = "";
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$schooldb = $this->load->database($config, TRUE);
		
		$insertFile = 'school_create.sql';
		$handle = fopen($insertFile, "r");
		$fileContents = fread($handle, filesize($insertFile));
                
		$sql_clean = '';
		foreach (explode("\n", $fileContents) as $line){
			
			if(isset($line[0]) && $line[0] != "#"){
				$sql_clean .= $line."\n";
			}
			
		}
		
		foreach (explode(";\n", $sql_clean) as $sql){
			$sql = trim($sql);
		
			if($sql) 
			{
				$schooldb->query($sql);
			}
		}
	}
}
?>