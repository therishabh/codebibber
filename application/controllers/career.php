<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends CI_Controller {

	function __construct()
	{
		# code...
		parent :: __construct();
	}
	public function index()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "career";
		$this->load->view('template',$data);
	}
	
}
