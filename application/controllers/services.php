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

	function web_design_and_interactive()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "web-design-and-interactive";
		$this->load->view('template',$data);
	}

	function ui_ux()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "ui-ux";
		$this->load->view('template',$data);
	}

	function mobile_design()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "mobile-design";
		$this->load->view('template',$data);
	}

	function branding_and_corporate_identity()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "branding-and-corporate-identity";
		$this->load->view('template',$data);
	}

	function graphic_design()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "graphic-design";
		$this->load->view('template',$data);
	}

	function video_and_media()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "video-media";
		$this->load->view('template',$data);
	}

	function seo()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "seo";
		$this->load->view('template',$data);
	}

	function advertising()
	{
		$data['title'] = "Services | CodeBibber";
		$data['page'] = "advertising";
		$this->load->view('template',$data);
	}

	function marketing_and_strategic_planning()
	{

	}

	function business_management_mentoring()
	{

	}
	
}
