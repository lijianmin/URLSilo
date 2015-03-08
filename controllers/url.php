<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class url extends CI_Controller
{
 	function __construct()
 	{
   		parent::__construct();
   		$this->load->model('/url/url_model');
 	}
	
	function add($folder_id, $folder_name)
	{
		if($this->session->userdata('IS_LOGGED_IN'))
   		{	
			$data['USERNAME'] = $this->session->userdata('USERNAME');
			$data['F'] = $folder_id;
			$data['FOLDERNAME'] = $folder_name;
			$this->load->view('create_url_view', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}
	}
	
	function saveURL()
	{ 	
		$title = $this->input->post('title', TRUE);
		$url = $this->input->post('url', TRUE);
		$comments = $this->input->post('comments', TRUE);
		$folder = $this->input->post('folder_id', TRUE);

		$this->url_model->create($folder, $url, $title, $comments);
		$goto_folder = "/folder/view/".$folder;

		redirect($goto_folder);
		
		exit();
	}
	
	function deleteURL($folder_id = null, $member_id = null)
	{
		if($folder_id == null && $member_id == null)
		{
			show_error('No identifier provided', 500);
		}
		else
		{
			$this->load->model('/folder/folder_model');
				
			$this->folder_model->delete_member($folder_id, $member_id);
				
			//does not solve delete folder problem YET
			$this->url_model->delete_url($member_id);
			
			$view_folders = "/folder/view/".$folder_id;

			redirect($view_folders, 'refresh');
		}
	}
	
	function editURL($folder_id = null, $member_id = null)
	{
		if($this->session->userdata('IS_LOGGED_IN'))
   		{	
			$this->load->helper('form');
			
			$data['USERNAME'] = $this->session->userdata('USERNAME');
			$data['FOLDER_ID'] = $folder_id;
			$data['URL'] = $this->url_model->read($folder_id, $member_id);
			$this->load->view('edit_url_view', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}
	}
	
	function updateURL()
	{ 	
		$title = $this->input->post('title', TRUE);
		$url = $this->input->post('url', TRUE);
		$comments = $this->input->post('comments', TRUE);
		$folder_id = $this->input->post('folder_id', TRUE);
		$url_id = $this->input->post('url_id', TRUE);

		$this->url_model->update($folder_id, $url_id, $url, $title, $comments);
		$goto_folder = "/folder/view/".$folder_id;

		redirect($goto_folder);
		
		exit();
	}
}
?>