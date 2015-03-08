<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title><?php echo $USERNAME; ?>'s URLSilo</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/style/style.css">
 </head>
 
 <body class="site">

	<div id = "container">
	
		<div id = "header">

			<h1 align="center">pURL - portableURL that is...</h1>
		
		</div>
		
		<div id = "main">
		
			<form class="smart-green" name="folder_form" action="<?php echo site_url("folder/add_folder"); ?>" method="post">
				
				<h2>Create a New Folder</h2>
				<br/>
				<label for="FolderName">Name:</label>
				<input type="text" size="60" id="folder_name" name="folder_name"/>
				<br/>
				<br/>
		
				<!--<input type="hidden" id="user_id" name="user_id" value="">-->
		
				<input class="button" type="submit" value="Save"/>
				<input class="button" type="reset" value="Clear All"/>
				
				<br/>
				<br/>
				
			</form>
			</br>
			
		</div>
	
		<div id = "footer">
			
			<p align="center">
			<?php echo anchor("folder", "View All Folders"); ?> |
			<?php echo anchor("home", "Home"); ?> |
			<?php echo anchor("home/logout","Logout"); ?> <br/>
			</p>
			
			<p id="copyright_text">Copyright to Jianmin (2014)</p>
			
		</div>
 
 </body>
</html>