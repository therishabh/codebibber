<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webdevelopment extends CI_Controller {

	function __construct()
	{
		# code...
		parent :: __construct();
	}

	public function index()
	{
		$data['title'] = "Web Development Service | CodeBibber";
		$data['page'] = "web-development-service";
		$this->load->view('template',$data);
	}
}