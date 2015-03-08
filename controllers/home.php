<?php 

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
	session_start(); //we need to call PHP's session object to access it through CI
	
	class Home extends CI_Controller {

 		function __construct()
 		{
   			parent::__construct();
			$this->load->model('/folder/folder_model');
 		}

 		function index()
 		{
   			if($this->session->userdata('IS_LOGGED_IN'))
   			{
     			//$session_data = $this->session;
     			//$data = $session_data;
				$userid = $this->session->userdata('USERID');
				$user = $this->session->userdata('USERNAME');
				$data['FOLDER'] = $this->folder_model->retrieve_folder($userid, $user, FALSE);
				$data['USERNAME'] = $user;
     			$this->load->view('home_view', $data);
   			}
   			else
   			{
     			//If no session, redirect to login page
     			redirect('login', 'refresh');
   			}
 		}

 		function logout()
 		{
   			$this->session->unset_userdata('logged_in');
   			$this->session->sess_destroy();
   			redirect('home', 'refresh');
 		}

}

?>