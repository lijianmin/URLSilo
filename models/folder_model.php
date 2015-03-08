<?php
Class folder_model extends CI_Model
{
	function retrieve_content()
	{
	
	}
	
 	function retrieve_folders($userid, $username)
 	{
   		//calling stored procedure
   		//$sql = "CALL GET_FOLDER('".$userid."')";
   		//$query = $this -> db -> query($sql); 
   		$this -> db -> select('NAME','FOLDER_ID');
   		$this -> db -> from('FOLDER');
   		$this -> db -> where('USER_ID', $userid);
   		$this -> db -> limit(1);

   		$query = $this -> db -> get();

   		if($query -> num_rows() >= 1)
   		{
   			return $query->result();
   		}
   		else
   		{
     		return false;
   		}
   
   		exit();
 	}
}
?>