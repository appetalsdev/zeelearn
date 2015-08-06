<?php
Class User_model extends CI_Model
{
	public function __construct() {
		 parent::__construct();
		 $this->userid = $this->session->userdata['logged_in']['userid'];
	}
	
	function addUser() {
        
		$this->load->helper('string');
		$password = random_string('alnum', 8);
		
		$now = date("Y-m-d H:i:s");
		$data = $this->input->post();
		
		$user_roles = $data['roles'];
		array_pop($data);
		
		$data['created_on'] = $now;
		$data['password'] = md5($password);
		
		$data['school_id'] = $data['school']['id'];
		unset($data['school']);
		
		$res = $this->db->insert('users', $data);
		$addUserid = $this->db->insert_id();;
		
        if($res)
        {
			foreach($user_roles as $role) 
			{
				$role = trim($role);
				$role_data[] = array(
					'user_id'   =>  $addUserid,
					'role_id'      =>  $role
				);
			}
			$role_res = $this->db->insert_batch('role_user', $role_data);
			
            $data['success'] = true;
            $data['message'] = " User has been created successfully!" ;                        
		}
        else 
        {
            $data['success'] = false;
            $data['message'] = 'Unable to add user! Please try again.'; 
        }
        return $data;
    }
	
	function getUsers() {
		//$order_data = $this->input->post('order_data');
		
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
			$this->db->from('users as u');
			$this->db->join('role_user as ru', 'ru.user_id=u.id');
			$this->db->where('deleted', 0);
			$query = $this->db->get();
			//$user['num_rows'] = $query->num_rows();
		}*/
        
		$this->db->select('u.*, GROUP_CONCAT(r.name) as roles, sc.name as school');
        $this->db->from('users as u');
		$this->db->join('role_user as ru', 'ru.user_id=u.id');
		$this->db->join('roles as r', 'r.id=ru.role_id');
		$this->db->join('schools as sc', 'sc.id=u.school_id', 'LEFT');
		$this->db->where('u.deleted', 0);
		$this->db->group_by("ru.user_id"); 
		
        //$query = $this->db->limit($limit, $start);
        /*if ($order_data == 'id')*/
            $this->db->order_by('u.id', 'desc');

        $query = $this->db->get();
		//echo $this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            $user = $query->result_array();
        } else {
            $user = array('E');
        }

        return $user;
    }
	
	function checkUserUnique($request, $type)
	{
		$this->db->select($type);
        $this->db->from('users');
		$this->db->where($type, $request);
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
	
	function fetchUserDetails($userId)
	{
		$this->db->select('u.*, GROUP_CONCAT(ru.role_id) as roles, GROUP_CONCAT(r.name SEPARATOR ", ") as role_names, CONCAT(sc.name, ", ", sc.city) AS school', FALSE);
        $this->db->from('users as u');
		$this->db->join('role_user as ru', 'ru.user_id=u.id', 'LEFT');
		$this->db->join('roles as r', 'r.id=ru.role_id');
		$this->db->join('schools as sc', 'sc.id=u.school_id', 'LEFT');
		$this->db->where(array('u.id'=>$userId, 'u.deleted'=>'0'));
		$this->db->group_by("ru.user_id"); 
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
            $user['data'] = $query->row();
        } else {
            $user['data'] = '';
        }
		
		return $user;
	}
	
	function editUser()
	{
		$now = date("Y-m-d H:i:s");
		
		$data = $this->input->post();
		//print_r($data);exit;
		
		$editUserid = $data['id'];
		$this->db->where('id', $data['id']);
		array_shift($data); /* remove the "id" element form array as no need to update "id" */
		
		$user_roles = $data['roles'];
		unset($data['roles']); /* unset roles as it is passed to separate table */
		
		$data['modified_on'] = $now;
		$data['school_id'] = $data['school']['id'];
		unset($data['school']);
		//print_r($data);exit;
		$res = $this->db->update('users', $data);
				
        if($res)
        {
			foreach($user_roles as $role) 
			{
				$role = trim($role);
				$role_data[] = array(
					'user_id'   =>  $editUserid,
					'role_id'      =>  $role
				);
			}
			$this->db->delete('role_user', array('user_id' => $editUserid)); 
			$role_res = $this->db->insert_batch('role_user', $role_data);
			
            $data['success'] = true;
            $data['message'] = " User has been updated successfully!" ;                        
		}
        else 
        {
            $data['success'] = false;
            $data['message'] = 'Unable to update user! Please try again.'; 
        }
        return $data;
	}
	
	function deleteUser()
	{
		$now = date("Y-m-d H:i:s");
		
		$id = $this->input->post('id');
		$data = array(
            'deleted' => 1
        );
		
		$this->db->where('id', $id);
		$res = $this->db->update('users', $data);
				
		if($res)
        {
            $data['success'] = true;
            $data['message'] = " User has been deleted successfully!" ;                        
		}
        else 
        {
            $data['success'] = false;
            $data['message'] = 'Unable to delete user! Please try again.'; 
        }
        return $data;
	}
	
	function getRoles()
	{
		$this->db->select('*');
		$this->db->from('roles');
		$this->db->where('deleted', 0);
		$this->db->where_not_in('id', 1);
		$query = $this->db->get();
				
		$data = $query->result_array();                   
		
        return $data;
	}
	
	function changePassword()
	{
		$now = date("Y-m-d H:i:s");
		$data = $this->input->post();
		$data['password'] = md5($data['password']);
				
		$this->db->where('id', $data['id']);
		$res = $this->db->update('users', $data);
				
		if($res)
        {
            $data['success'] = true;
            $data['message'] = "User password has been updated successfully!" ;                        
		}
        else 
        {
            $data['success'] = false;
            $data['message'] = 'Unable to change password! Please try again.'; 
        }
        return $data;
	}
	
	function getSchoolList($school_id='')
	{
		$this->db->select('id, CONCAT(name, ", ", city) AS name', FALSE);
		$this->db->from('schools');

		if($school_id)
			$this->db->where('id',$school_id);
		$query = $this->db->get();
			
		$data = $query->result_array();                   
		
        return $data;
	}
}
?>