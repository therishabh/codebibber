<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

	function __construct()
	{
		# code...
		parent :: __construct();
	}
	public function index()
	{
		$data['title'] = "Company | CodeBibber";
		$data['page'] = "company";
		$this->load->view('template',$data);
	}
	
}
