<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>URLSilo</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/style/style.css">
 </head>
 <body class="site">

	<div id = "container">
	
		<div id = "header">
			
			<h1 align="center">pURL - portableURL that is...</h1>
		
		</div>
		
		<div id = "main">
			
			<font face=arial color=red><?php echo validation_errors(); ?></font>
			
			<form class="smart-green" action="<?php echo site_url("verifylogin"); ?>" method="post">
			<?php //echo form_open('verifylogin'); ?>
				
				<h2>Please sign in to continue...</h2>
				<label for="username">Username:</label>
				<input type="text" placeholder="Username" size="20" id="username" name="username"/>
				<br/>
				<br/>
				
				<label for="password">Password:</label>
				<input type="password" placeholder="Password" size="20" id="password" name="password"/>
				<br/>
				<br/>
				
				<input class="button" id="submit" type="submit" value="Sign In"/>
				
			</form>
			
		</div>
		
		<div id = "footer">
		
			<p id="copyright_text">Copyright to Jianmin (2014)</p>
		
		</div>
 
	</div>
	
	<script src="<?php echo base_url(); ?>/jquery/external/jquery/jquery.js"></script>
	
 </body>
</html>

