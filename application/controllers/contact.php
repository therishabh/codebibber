<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		# code...
		parent :: __construct();
	}
	public function index()
	{
		$data['title'] = "Contact | CodeBibber";
		$data['page'] = "contact";
		$this->load->view('template',$data);
	}

	public function form()
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$phone_no = $_POST['phone_no'];
		$company_name = $_POST['company_name'];
		$project_needs = $_POST['project_needs'];
		$budget = $_POST['budget'];
		$plan = $_POST['plan'];
		$hear = $_POST['hear'];
		$description = $_POST['description'];

		// $headers  = "From: ####<noreply@####.com>\r\n";
		// $headers .= "Reply-To: info@####.com\r\n";
		// $headers .= "Return-Path: info@####.com\r\n";
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset: utf8\r\n";

		// the message
		$msg = "<b>First Name : </b> $first_name<br>";
		$msg .= "<b>Last Name : </b> $last_name<br>";
		$msg .= "<b>Email Address : </b> $email<br>";
		$msg .= "<b>Website : </b> $website<br>";
		$msg .= "<b>Phone Number : </b> $phone_no<br>";
		$msg .= "<b>Company Name : </b> $company_name<br>";
		$msg .= "<b>Project Needs : </b> $project_needs<br>";
		$msg .= "<b>Budget in mind? : </b> $budget<br>";
		$msg .= "<b>How quickly do you plan to proceed? : </b> $plan<br>";
		$msg .= "<b>Hear about us : </b> $hear<br>";
		$msg .= "<b>Brief Description : </b> $description<br>";

		// send email
		mail("mbmohitbagga88@gmail.com,niraj001@gmail.com","Request a Quote From CodeBibber Website",$msg,$headers);
		
		//upload information into database..
		$this->load->model("main_model");

		$insertdata['name'] = $first_name." ".$last_name;
		$insertdata['email'] = $email;
		$insertdata['website'] = $website;
		$insertdata['phone'] = $phone_no;
		$insertdata['company'] = $company_name;
		$insertdata['project_needs'] = $project_needs;
		$insertdata['budget'] = $budget;
		$insertdata['plan_to_proceed'] = $plan;
		$insertdata['hear_about_us'] = $hear;

		$insertdata['description'] = htmlspecialchars($description,ENT_QUOTES);
		date_default_timezone_set('Asia/Calcutta');
		$insertdata['create_date'] = date("y-m-d H:i:s");
		$this->main_model->insertdata($insertdata,"user_request");
		
	}
	
}
