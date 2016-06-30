 
<body class="ticketsBackground">
<?php $this->renderFeedbackMessages(); ?>
<div class="container" id="tickets">
  <div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
<p>wait {SECONDS} for 20 tickets!</p>
<button id="button">Click me!!!</button>


	<div class="progress">
	  <div class="progress-bar" style="width: 1%;"></div>
	</div>


	<div class="panel panel-default">
	  <div class="panel-body">
	  

	  </div>
	</div>

</div>

<script src="<?php echo Config::get('URL'); ?>js/update.js"></script>
<script src="<?php echo Config::get('URL'); ?>js/progressbar.js"></script>
