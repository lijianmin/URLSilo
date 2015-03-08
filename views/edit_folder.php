<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>URLSilo</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/style/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/style/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand"><?php echo anchor("home", "URLSilo"); ?></span>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><li><?php echo anchor("folder/view/".$FOLDER_ID, "Back to Folder"); ?></li></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo site_url("#"); ?>"><b>Logged in as <?php echo $USERNAME; ?></b></a></li>
            <li><?php echo anchor("home/logout","Logout"); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h2><span class="glyphicon glyphicon-pencil"></span> Edit Folder "<?php echo $FOLDER[0]['NAME']; ?>"</h2>
      </div>
      <div>
		
<form class="form-horizontal" name="folder_form" action="<?php echo site_url("folder/update_folder"); ?>" method="post">
<fieldset>

<input type="hidden" id="folder_id" name="folder_id" value="<?php echo $FOLDER[0]['FOLDER_ID'] ?>">
<input type="hidden" id="user_id" name="user_id" value="<?php echo $FOLDER[0]['USER_ID'] ?>">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Folder Name</label>  
  <div class="col-md-6">
  <input id="folder_name" name="folder_name" value="<?php echo $FOLDER[0]['NAME']; ?>" class="form-control input-md" required="" type="text" size="60"> 
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <br/>
  <label class="col-md-4 control-label" for="comments">Comments</label>
  <div class="col-md-4">     
    <textarea class="form-control" id="comments" name="comments"><?php echo $FOLDER[0]['FOLDER_COMMENT']; ?></textarea>
  </div>
</div>

<br/>

<!-- VIP Checkbox -->
<div class="form-group">
    <label class="col-md-4 control-label" for="important">Important?</label>
    <div class="col-md-6">
		<input type="checkbox" id="important" name="important" value="<?php echo $FOLDER[0]['MARKED']; ?>"></input>
	</div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submitBtn"></label>
  <div class="col-md-8">
    <button id="submitBtn" name="submitBtn" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
</form>
        
	  </div>
      <p></p>
    </div>

    <div class="footer">
      <div class="container">
        <p class="text-muted">Copyright 2014 jianmin.dev {at} gmail dot com</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>