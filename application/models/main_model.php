<?php 

/**
* 
*/
class Main_model extends CI_Model
{
	function __construct()
	{
		# code...
		parent::__construct();
	}


	function check_login($username,$password,$table)
	{
		$this->db->select('password');
		$this->db->where('username',$username);
		$this->db->where('status','1');
		$query = $this->db->get($table);
		$row = $query->row();
		if($query->num_rows() > 0)
		{
			if(md5($password) == $row->password)
			{
				return TRUE;
			}
			else
			{
				return False;
			}
		}
		else
		{
			return false;
		}
	}

	function truncate($string, $length, $dots = "...") {
    	return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
	}


// **************** start comman functions ****************
	
	//function for create random string..
	function generateRandomString($length = 3) {
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
		  $randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString.rand(0,9);
	}

	function fetchbyid($id,$table)
	{
		$this->db->where('status','1');
		$this->db->where('id',$id);
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}

	function fetchbyfield($field,$value,$table)
	{

		$this->db->where('status','1');
		$this->db->where($field,$value);
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			//return only one row..
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}

	function fetchalldata($table)
	{
		$this->db->where('status','1');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	function fetchalldatadesc($table)
	{
		$this->db->where('status','1');
		$this->db->order_by('id','desc');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	function fetchlastactivedata($table)
	{
		$this->db->where('status','1');
		$this->db->order_by('id','desc');
		$this->db->limit('1');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}

	function fetchlastdata($table)
	{
		$this->db->order_by('id','desc');
		$this->db->limit('1');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}

	function updatedata($data,$id,$table)
	{
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// function for insert data into table
	function insertdata($data,$table)
	{
		$query = $this->db->insert($table,$data);
		if($query)
		{
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	function fetch_news($table)
	{
		$this->db->where('status','1');
		$this->db->order_by('create_date','desc');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			$data = $query->result_array();
			return $data;
		}
		else
		{
			return false;
		}
	}

	function news_search($search_value,$table)
	{
		$this->db->where('status','1');
		$this->db->order_by('create_date','desc');
		$this->db->like('name',$search_value);
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			$data = $query->result_array();
			return $data;
		}
		else
		{
			return false;
		}
	}

	function fetchstudents($id)
	{
		$this->db->where('status','1');
		$this->db->where('event_id',$id);
		$query = $this->db->get("student_zone_students");
		if($query->num_rows() > 0)
		{
			//return only one row..
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	function fetch_student_zone_event_seach($event,$class,$school)
	{
		$this->db->like('event_name',$event);
		$this->db->like('class',$class);
		$this->db->like('school',$school);
		$this->db->where('status','1');
		$this->db->order_by('id','desc');
		$query = $this->db->get("student_zone_event");
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
}
?>
