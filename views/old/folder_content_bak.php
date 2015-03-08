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
			<h2>Folder</h2>
			<br/><?php echo anchor("url/add/".$FOLDER_ID, "Add an URL"); ?> | <?php echo anchor("folder/delete_folder/".$FOLDER_ID, "Delete Folder (DO NOT REGRET)"); ?></br></br>
			<?php if(count($CONTENT) == 0){ ?>
				<p> You do not have any URL stored. Do you wish to add one?</p>
			<?php } else{ ?>
				<table border=1>
					<tr>
						<th>No.</th>
						<th>Title</th>
						<th>URL</th>
						<th>Comments</th>
						<th>Actions</th>
					</tr>			
					<?php 
						$count = 1;
						foreach($CONTENT as $c): 
					?>
					<tr> 
						<td><?php echo $count++; ?></td>
						<td><?php echo $c['TITLE']; ?></td>
						<td><a href="<?php echo $c['URL']; ?>" target=new><?php echo $c['URL']; ?></a></td>
						<td><?php echo $c['COMMENTS']; ?></td>
						<td>
							<?php 
								echo 'Edit'
								. '/'
								. anchor('folder/delete_url/'.$c['FOLDER_ID'].'/'.$c['MEMBER_ID'], 'Delete');
							?>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
   
			<?php } ?>
	
			</br>
			</div>
		
		</div>
		
		<div id = "footer">
			
			<p align="center">
			<?php echo anchor("folder", "View All Folders"); ?> | 
			<?php echo anchor("home", "Home"); ?> | 
			<?php echo anchor("home/logout", "Logout"); ?></br>
			</p>
			
			<p id="copyright_text">Copyright to Jianmin (2014)</p>
			
		</div>
		
	</div>
	
 </body>
</html>