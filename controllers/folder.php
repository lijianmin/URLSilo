<?php 

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Folder extends CI_Controller {

 		function __construct()
 		{
   			parent::__construct();
   			$this->load->model('/folder/folder_model');
			$this->load->helper('url'); 
 		}
		
		function get_urls()
		{
			if($this->session->userdata('IS_LOGGED_IN'))
			{
				$userid = $this->session->userdata('USERID');
				
				$data['CONTENT'] = $this->folder_model->retrieve_all_url($userid);
				$data['USERNAME'] = $this->session->userdata('USERNAME');;
				
				$this->load->view('all_url_view',$data);
			}
			else
			{
				redirect('login','refresh');
			}
		}

		function view($folder_id)
		{
			if($this->session->userdata('IS_LOGGED_IN'))
			{
				$userid = $this->session->userdata('USERID');
				$user = $this->session->userdata('USERNAME');
				
				$data['CONTENT'] = $this->folder_model->retrieve_folder($userid, $user, $folder_id);
				$data['FOLDER_NAME'] = $this->folder_model->retrieve_folder_name($folder_id, $userid)[0]['NAME'];
				$data['FOLDER'] = $this->folder_model->retrieve_folder($userid, $user, FALSE);
				$data['USERNAME'] = $user;
				$data['FOLDER_ID'] = $folder_id;
				$data['USERID'] = $userid;
				
				$this->load->view('folder_content',$data);
			}
			else
			{
				redirect('login','refresh');
			}
		}
		
		/*function delete_url($folder_id = null, $member_id = null)
		{
			if($folder_id == null && $member_id == null)
			{
				show_error('No identifier provided', 500);
			}
			else
			{
				$this->load->model('/url/url_model');
				
				$this->folder_model->delete_member($folder_id, $member_id);
				
				//does not solve delete folder problem YET
				$this->url_model->delete_url($member_id);
				
				$view_folders = "/folder/view/".$folder_id;

				redirect($view_folders, 'refresh');
			}
		}*/
		
		function add()
		{
			if($this->session->userdata('IS_LOGGED_IN'))
			{
				$data['ID'] = $this->session->userdata('USERID');
				$data['USERNAME'] = $this->session->userdata('USERNAME');
				
				$this->load->view('add_folder',$data);
				
			}
			else
			{
				redirect('login', 'refresh');
			}
		}
		
		function update($user_id = null, $folder_id = null)
		{
			if($this->session->userdata('IS_LOGGED_IN'))
			{	
				$this->load->helper('form');
			
				$data['USERNAME'] = $this->session->userdata('USERNAME');
				$data['FOLDER_ID'] = $folder_id;
				$data['USER_ID'] = $user_id;
				$data['FOLDER'] = $this->folder_model->retrieve_folder_details($folder_id, $user_id);
				$this->load->view('edit_folder', $data);
			}
			else
			{
				redirect('login', 'refresh');
			}			
		}
		
		function update_folder()
		{
			if($this->session->userdata('IS_LOGGED_IN'))
			{
				$FOLDER_ID = $this->input->post('folder_id', TRUE);
				$USER_ID = $this->input->post('user_id', TRUE);
				$FOLDER_NAME = $this->input->post('folder_name', TRUE);
				$FOLDER_COMMENT = $this->input->post('comments', TRUE);
				$CHECKED = $this->input->post('important', TRUE);
				$IMPORTANT = 0; 
			
				if((int) $CHECKED == 1)
				{
					$IMPORTANT = 1;
				}
			
				$USER_ID = $this->session->userdata('USERID');
				$this->folder_model->update($FOLDER_ID, $USER_ID, $FOLDER_NAME, $FOLDER_COMMENT, $IMPORTANT);
				
				$view_folders = "/folder/view/".$FOLDER_ID;

				redirect($view_folders, 'refresh');
			}
			else
			{
				redirect('login', 'refresh');
			}
		}
		
		function add_folder()
		{
			$FOLDER_NAME = $this->input->post('folder_name', TRUE);
			$COMMENTS = $this->input->post('comments', TRUE);
			$CHECKED = $this->input->post('important', TRUE);
			$IMPORTANT = 0; 
			
			if((int) $CHECKED == 1)
			{
				$IMPORTANT = 1;
			}
			
			$USER_ID = $this->session->userdata('USERID');

			$this->folder_model->create($FOLDER_NAME, $COMMENTS, $IMPORTANT, $USER_ID);
			$view_all_folders = "/folder";

			redirect($view_all_folders, 'refresh');
		}
		
		function delete_folder($folder_id = null)
		{
			if($folder_id == null)
			{
				show_error('No identifier provided', 500);
			}
			else
			{
				$this->folder_model->delete_folder($folder_id);

				redirect('folder', 'refresh');
			}
		}
 		
 		function index()
 		{	
 			if($this->session->userdata('IS_LOGGED_IN'))
   			{
   				$userid = $this->session->userdata('USERID');
				$user = $this->session->userdata('USERNAME');
 				$data['FOLDER'] = $this->folder_model->retrieve_folder($userid, $user, FALSE);
 				$data['USERNAME'] = $user;
				$data['USERID'] = $userid;
 							
 				$this->load->view('folder_view',$data);
 			}
 			else
 			{
 				redirect('login', 'refresh');
 			}
 		}

	}

?>