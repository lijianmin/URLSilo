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
            <li><?php echo anchor("folder/view/".$F, "Back to Folder"); ?></li>
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
        <h2><span class="glyphicon glyphicon-bookmark"></span> Add an URL to "<?php echo $FOLDERNAME; ?>"</h2>
      </div>
      <div>
		
<form class="form-horizontal" name="url_form" action="<?php echo site_url("url/saveURL"); ?>" method="post">
<fieldset>
<input type="hidden" id="folder_id" name="folder_id" value="<?php echo $F ?>">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>  
  <div class="col-md-6">
  <input id="title" name="title" placeholder="Title for URL" class="form-control input-md" required="" type="text">
  <span class="help-block">E.g. Google</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="url">URL</label>  
  <div class="col-md-6">
  <input id="url" name="url" placeholder="URL" class="form-control input-md" required="" type="text">
  <span class="help-block">E.g. http://www.google.com</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Category</label>
  <div class="col-md-6">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
	<br/>
  <label class="col-md-4 control-label" for="comments">Comments</label>
  <div class="col-md-4">     
    <textarea class="form-control" id="comments" name="comments">Comments here!</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submitBtn"></label>
  <div class="col-md-8">
    <button id="submitBtn" name="submitBtn" class="btn btn-primary">Add It!</button>
    <button id="resetBtn" name="resetBtn" class="btn btn-danger">Clear All</button>
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