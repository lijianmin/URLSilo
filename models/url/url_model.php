<?php
Class url_model extends CI_Model
{
	//create new url
 	function create($folder_id, $url, $title, $comment)
	{
		if($folder_id == null)
		{
			show_error('No identifier provided', 500);
		}
		else
		{
			$sql = "CALL INSERT_URL(".$folder_id.",'".$url."','".$comment."','".$title."')";
			$query = $this -> db -> query($sql);
		}
	}
	
	function read($folder_id = null, $url_id = null)
	{
		if($folder_id == null)
		{
			show_error('No identifier provided', 500);
		}
		else
		{
			$sql = "CALL GET_URL(".$url_id.",'".$folder_id."')";
			
			$query_result = $this -> db -> query($sql);
			
			if($query_result -> num_rows() == 1)
			{
				$result = $query_result->result_array();
			
				$query_result -> next_result();
				$query_result -> free_result();
			
				return $result;
			}
			else
			{
				return false;
			}
		}
	}
	
	//update URL
	function update($folder_id = null, $url_id = null, $url, $title, $comments)
	{
		if($url_id == null || $folder_id == null)
		{
			show_error('No identifier provided', 500);
		}
		else
		{
			$data = array(
				'TITLE' => $title,
				'COMMENTS' => $comments,
				'URL' => $url,
				'FOLDER_ID' => $folder_id
			);

			$this->db->where('URL_ID', $url_id);
			$this->db->update('url', $data);
		}
	}
	
	//delete URL from table url - not necessary
	function delete_url($url_id)
	{
		if($url_id == null)
		{
			show_error('No identifier provided', 500);
		}
		else
		{
			$this->db->where('URL_ID', $url_id);
			$this->db->delete('url');
		}
	}
}
?>