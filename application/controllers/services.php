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
		$data['meta_description'] = "";
		$data['meta_keywords'] = "";
		$data['page'] = "services";
		$this->load->view('template',$data);
	}

	function web_development_service()
	{
		$data['title'] = "Custom Website Design and Web development Services in India - CodeBibber";
		$data['meta_description'] = "CodeBibber provides custom website design and development services help to get unique business. Request a quote now!";
		$data['meta_keywords'] = "web development services india, web development services in india, website development services india, website development services in india, custom website development india, website design services india, website design services in india, web design services india, web development services india, web development services in india, website development services india, website development services in india, custom website development india, website design services india";
		$data['page'] = "web-development-service";
		$this->load->view('template',$data);
	}

	function user_interface_design_service()
	{
		$data['title'] = "UI/UX design services for Web, Mobile & Tablets India - CodeBibber";
		$data['meta_description'] = "CodeBibber is leading UI/UX Design Company in India. We deliver best quality design with expert content on time. Visit Now!";
		$data['meta_keywords'] = "UI Design Agency India, UX Design Agency India, UX Design Services India";
		$data['page'] = "user_interface_design_service";
		$this->load->view('template',$data);
	}

	function mobile_development_service()
	{
		$data['title'] = "Mobile IOS App & Android Application Development Services in India - CodeBibber";
		$data['meta_description'] = "CodeBibber is a mobile app development company offers expert iOS app & android application development services in India at reasonable rates. Visit now!";
		$data['meta_keywords'] = "";
		$data['page'] = "mobile_development_service";
		$this->load->view('template',$data);
	}

	function enterprise_mobility_service()
	{
		$data['title'] = "Enterprise Mobility Services & Solutions India - CodeBibber";
		$data['meta_description'] = "CodeBibber provide valuable enterprise mobility services at competitive rates in India. Get a quote.";
		$data['meta_keywords'] = "";
		$data['page'] = "enterprise_mobility_service";
		$this->load->view('template',$data);
	}

	function digital_marketing_agency()
	{
		$data['title'] = "Digital Marketing Agency, Online Marketing Company India - CodeBibber ";
		$data['meta_description'] = "Increase online business with CodeBibber. A Complete Digital Marketing Agency in India serving Social media, SEO, Online advertising, mobile ads and much more. Hire our Services now!";
		$data['meta_keywords'] = "digital marketing agency india, digital marketing services india, digital marketing services in india, digital marketing agency in india";
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
