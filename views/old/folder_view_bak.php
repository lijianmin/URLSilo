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
			
			<div class="smart-green">
				<h2>Folders</h2>
				<br/>
				<?php foreach($FOLDER as $f): ?>
					<p> <a href = "<?php echo site_url( array("folder","view",$f['FOLDER_ID']) );?>"> <?php echo $f['NAME'] ?> </a> </p>
				<?php endforeach ?>
			</div>
   	
			<br/>
			
		</div>
		
		<div id = "footer">
			
			<p align="center">
			<?php echo anchor("folder/add", "Add a Folder"); ?> |
			<?php echo anchor("home", "Home"); ?> |
			<?php echo anchor("home/logout", "Logout"); ?>
			</p>
			
			<p id="copyright_text">Copyright to Jianmin (2014)</p>
			
		</div>
 
 </body>
</html>