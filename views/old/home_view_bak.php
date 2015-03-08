<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $username = $this->session->userdata('USERNAME'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title><?php echo $username; ?>'s URLSilo</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/style/style.css">
 </head>
 
 <body class="site">

	<div id = "container">
	
		<div id = "header">
		
			<h1 align="center">pURL - portableURL that is...</h1>
		
		</div>
		
		<div id = "main">
		
			<div class="smart-green">
				<h2>Welcome back, <?php echo $username; ?>!</h2>
				<br/><p>Have you done anything today?</p>
			</div>
			
		</div>
		
		<div id = "footer">
			
			<p align="center">
			<?php echo anchor("folder", "View Your Folders"); ?> | 
			<?php echo anchor("home/logout", "Logout"); ?>
			</p>
			
			<p id="copyright_text">Copyright to Jianmin (2014)</p>
			
		</div>
	
	</div>
	
 </body>
</html>

