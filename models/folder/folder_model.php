<?php
Class folder_model extends CI_Model
{

	function retrieve_all_url($USER_ID)
	{
		//calling stored procedure
		$sql = "CALL GET_FOLDERS_X_FOLDERMEMBERS ('".$USER_ID."')";
		$query = $this->db->query($sql);
		
		if($query -> num_rows() >=1)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}		
	}
	
	function create($FOLDER_NAME, $COMMENTS, $IMPORTANT, $USER_ID)
	{
		$data = array(
			'USER_ID' => $USER_ID,
			'NAME' => $FOLDER_NAME,
			'FOLDER_COMMENT' => $COMMENTS,
			'MARKED' => $IMPORTANT
		);
		
		$this->db->insert('folder', $data); 
	}
	
	function update_folder()
	{
	}
	
	function delete_folder($folder_id)
	{
		$this->db->where('FOLDER_ID', $folder_id);
		$this->db->delete('folder');
	}
	
	function delete_member($folder_id, $member_id)
	{
		$this->db->where('MEMBER_ID', $member_id);
		$this->db->where('FOLDER_ID', $folder_id);
		
		$this->db->delete('folder_members');
	}
	
	//===========READ===========
	//GET folder name
	function retrieve_folder_name($folder_id, $userid)
	{
		$this -> db -> select('NAME');
   		$this -> db -> from('FOLDER');
   		$this -> db -> where('USER_ID', $userid);
   		$this -> db -> where('FOLDER_ID', $folder_id);
		
		$query_result = $this -> db -> get();
		
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
	
	function retrieve_folder_details($folder_id, $userid)
	{
		if($folder_id == null)
		{
			show_error('No identifier provided', 500);
		}
		else
		{
			$sql = "CALL GET_FOLDER_DETAILS(".$userid.",'".$folder_id."')";
			
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
	
	//GET in case its needed
	function retrieve_content()
	{
		//calling stored procedure
		$sql = "CALL GET_FOLDER_X_FOLDERMEMBERS ('".$id."','".$folder_id."')";
		$query_result = $this->db->query($sql);
		
		if($query_result -> num_rows() >=1)
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
	
	//GET folder details and/or contents
 	function retrieve_folder($userid, $username, $folder_id = FALSE)
 	{
   		if($folder_id === FALSE)
		{
			//calling stored procedure
			$sql = "CALL GET_FOLDER('".$userid."')";
			$query_result = $this -> db -> query($sql); 
			
			$result = $query_result->result_array();
			
			$query_result -> next_result();
			$query_result -> free_result();
			
			return $result;
		}
		
		$sql = "CALL GET_FOLDER_X_FOLDERMEMBERS ('".$userid."','".$folder_id."')";
		$query_result = $this -> db -> query($sql); 
			
		$result = $query_result->result_array();
			
		$query_result -> next_result();
		$query_result -> free_result();
			
		return $result;	
 	}
	
	//update folder
	function update($folder_id = null, $user_id = null, $name, $folder_comment, $marked)
	{
		if($user_id == null || $folder_id == null)
		{
			show_error('No identifier provided', 500);
		}
		else
		{
			$data = array(
				'NAME' => $name,
				'FOLDER_COMMENT' => $folder_comment,
				'MARKED' => $marked
			);

			$this->db->where('FOLDER_ID', $folder_id);
			$this->db->where('USER_ID', $user_id);
			$this->db->update('folder', $data);
		}
	}
}
?>