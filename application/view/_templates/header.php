<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lucky4</title>
		<meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

	<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

		<!-- Loading Bootstrap -->
	<link href="<?php echo Config::get('URL'); ?>css/bootstrap.css" rel="stylesheet">

		<!-- Loading Flat UI -->
	<link href="<?php echo Config::get('URL'); ?>css/flat-ui.css" rel="stylesheet">

		
		<!-- Loading Font Awsome -->
	<link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/font-awesome.css">

		<!-- Loading Costum Flat UI -->
	<link href="<?php echo Config::get('URL'); ?>css/style.css" rel="stylesheet">


	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS t the end of file. -->
		<!--[if lt IE 9]>
			<script src="dist/js/vendor/html5shiv.js"></script>
			<script src="dist/js/vendor/respond.min.js"></script>
		<![endif]-->
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="box box-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
							<span class="sr-only">Toggle navigation</span>
					</button>
					<a class="navbar-brand" href="<?php echo Config::get('URL'); ?>index/index">Lucky4</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-01">
					<ul class="nav navbar-nav">
            <?php if (Session::userIsLoggedIn()) { ?>
                <li <?php if (View::checkForActiveController($filename, "tickets")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>tickets/index">Tickets</a>
                </li>
						<li><a href="roullete.php">Roullete</a></li>
						<?php } else { ?>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li>
                    		<a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
                			</li>
                            <li>
							<button class="btn btn-default navbar-btn btn-sm" type="button"><a href="<?php echo Config::get('URL'); ?>register/index">Sign up</a></button>
                            </li>
                            <?php } ?>
                    <?php if (Session::userIsLoggedIn()) : ?>
        				<li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
                <a href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
                    </li>
                    <li>
                        <a href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
                    </li>
                    <li>
                        <a href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a>
                    </li>
                    <li>
                        <a href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a>
                    </li>
                    <li>
                        <a href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a>
                    </li>
                    <li>
                        <a href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a>
                    </li>
                    <li >
                        <a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
                    </li>
                    <?php if (Session::get("user_account_type") == 7) : ?>
	                <li>
	                    <a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
	            	</li>
          </ul>
                      	<?php endif; ?>
        	<?php endif; ?>
        </li>
      </ul>
        	</div>
        </div>
     </div>
	</nav><!-- /navbar -->
</header>