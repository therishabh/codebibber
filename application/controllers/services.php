<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	function __construct()
	{
		# code...
		parent :: __construct();
	}
	public function index()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "services";
		$this->load->view('template',$data);
	}

	function web_development_service()
	{
		$data['title'] = "Web Development Service | CodeBibber";
		$data['page'] = "web-development-service";
		$this->load->view('template',$data);
	}

	function user_interface_design_service()
	{
		$data['title'] = "User Interface Design Service | CodeBibber";
		$data['page'] = "user_interface_design_service";
		$this->load->view('template',$data);
	}

	function mobile_development_service()
	{
		$data['title'] = "Mobile Development Service | CodeBibber";
		$data['page'] = "mobile_development_service";
		$this->load->view('template',$data);
	}

	function enterprise_mobility_service()
	{
		$data['title'] = "Enterprise Mobility Service | CodeBibber";
		$data['page'] = "enterprise_mobility_service";
		$this->load->view('template',$data);
	}

	function digital_marketing_agency()
	{
		$data['title'] = "Digital Marketing Agency | CodeBibber";
		$data['page'] = "digital_marketing_agency";
		$this->load->view('template',$data);
	}

	// function video_and_media()
	// {
	// 	$data['title'] = "Services | CodeBibber";
	// 	$data['page'] = "video-media";
	// 	$this->load->view('template',$data);
	// }

	// function seo()
	// {
	// 	$data['title'] = "Services | CodeBibber";
	// 	$data['page'] = "seo";
	// 	$this->load->view('template',$data);
	// }

	// function advertising()
	// {
	// 	$data['title'] = "Services | CodeBibber";
	// 	$data['page'] = "advertising";
	// 	$this->load->view('template',$data);
	// }

	// function marketing_and_strategic_planning()
	// {

	// }

	// function business_management_mentoring()
	// {

	// }
	
}
