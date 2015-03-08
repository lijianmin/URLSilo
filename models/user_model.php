<?php
Class user_model extends CI_Model
{
 	function login($username, $password)
 	{
   		$this -> db -> select('USERID, USERNAME, PASSWORD');
   		$this -> db -> from('USERS');
   		$this -> db -> where('USERNAME', $username);
   		$this -> db -> where('PASSWORD', MD5($password));
   		$this -> db -> limit(1);
   
   		//calling stored procedure
   		//$sql = "CALL LOGON_USER('".$username."','".$password."')";
   		//$query = $this -> db -> query($sql); 

   		$query = $this -> db -> get();

   		if($query -> num_rows() == 1)
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