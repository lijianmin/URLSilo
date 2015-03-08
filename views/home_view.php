<!DOCTYPE html>
<?php $username = $this->session->userdata('USERNAME'); ?>
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
            <li><?php echo anchor("folder/add", "Add a Folder"); ?></li>
            <li><a href="#">Quick Add a URL</a></li>
			<li><?php echo anchor("folder", "View Your Folders"); ?> </li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo site_url("#"); ?>"><b>Logged in as <?php echo $USERNAME; ?></b></a></li>
            <li><?php echo anchor("home/logout", "Logout"); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div class="jumbotron">
		<div class="container">
			<h1>Welcome, <?php echo $username; ?></h1>
			<p>You were last logged in {at} 10.15AM SGT, 15 September 2014</p>
			<br/>
			<p>
				<a class="btn btn-lg btn-primary" href="<?php echo site_url("folder/get_urls"); ?>" role="button"><span class="glyphicon glyphicon-list-alt"></span> See all of your bookmarks! &raquo;</a>
			</p>
		</div>
	</div>
		
    <!-- Begin page content -->
    <div class="container">
		<div class="page-header">
			<h2>
				<span class="glyphicon glyphicon-star"></span>&nbsp Some of your important folders</span>
			</h2>
			<p><?php echo anchor("folder", "View All"); ?></p>
		</div>
	 
		<div class="row">
	
			<?php foreach($FOLDER as $f): ?>
				
				<?php if($f['MARKED'] == 1) { ?>
					<div class="col-6 col-sm-6 col-lg-4">
						<h2><?php echo $f['NAME'] ?></h2>
						<p><?php echo $f['FOLDER_COMMENT'] ?></p>
						<p><a class="btn btn-default" href="<?php echo site_url( array("folder","view",$f['FOLDER_ID']) );?>" role="button">View folder &raquo;</a></p>
					</div><!--/span-->
				<?php } ?>
			
			<?php endforeach ?>
			
		</div><!--/row-->
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