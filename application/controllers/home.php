<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		# code...
		parent :: __construct();
	}
	public function index()
	{
		$data['title'] = "Website Design, Development & Digital Marketing Company India - CodeBibber";
		$data['meta_description'] = "CodeBibber is a leading web design, Development Company in India. Hire us for best services now!";
		$data['meta_keywords'] = "web development india , web development company india, website development company in india, website development in india, website development company india, website design company in india, website design company india, web design company india, digital marketing company india, digital marketing company in india";
		$data['page'] = "home";
		$this->load->view('template',$data);
	}

}
