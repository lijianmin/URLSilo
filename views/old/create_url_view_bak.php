<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title><?php echo $USERNAME; ?>'s URLSilo</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/style/style.css">
   <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body class="site">

	<div id = "container">
	
		<div id = "header">

			<h1 align="center">pURL - portableURL that is...</h1>
		
		</div>
		
		<div id = "main">
		
			<form class="smart-green" name="url_form" action="<?php echo site_url("url/saveURL"); ?>" method="post">
				
				<h2>Save Your URL</h2>
				<label for="Title">Title:</label><br/>
				<input type="text" placeholder="Title for your URL" size="80" id="title" name="title"/>
				<br/>
				<br/>
		
				<label for="URL">URL:</label><br/>
				<input type="text" placeholder="URL. E.g. http://www.google.com" size="80" id="url" name="url"/>
				<br/>
				<br/>

				<label for="Comments">Comments:</label><br/>
				<textarea rows="10" placeholder="Comments (optional)" cols="30" id="comments" name="comments">
				</textarea>
				<br/>
		
				<input type="hidden" id="folder_id" name="folder_id" value="<?php echo $F ?>">
				
				<br/>
		
				<input class="button" type="submit" value="Save"/>
				<input class="button" type="reset" value="Clear All"/>
				
			</form>
			
			</br>
			
		</div>
		
		<div id = "footer">
			
			<p align="center">
			<?php echo anchor("folder", "View All Folders"); ?> |
			<?php echo anchor("home", "Home"); ?> | 
			<?php echo anchor("home/logout","Logout"); ?>
			</p>
			
			<p id="copyright_text">Copyright to Jianmin (2014)</p>
			
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 </body>
</html>