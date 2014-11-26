<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Error extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent :: __construct();
	}

	function index()
	{
	}
	
	function _404(){
		$data['title'] = "404 Error | CodeBibber";
		$data['page'] = "404";
		$this->load->view('template',$data);
	}
}