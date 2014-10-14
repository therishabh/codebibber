<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		# code...
		parent :: __construct();
	}
	public function index()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "contact";
		$this->load->view('template',$data);
	}
	
}
