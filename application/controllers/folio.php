<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Folio extends CI_Controller {

	function __construct()
	{
		# code...
		parent :: __construct();
	}
	public function index()
	{
		$data['title'] = "Folio | CodeBibber";
		$data['page'] = "folio";
		$this->load->view('template',$data);
	}
	
}
