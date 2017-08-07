<nav class="navbar navbar-default" role="navigation">
 
    <?php if($debug == 1) { ?>
        <button id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>
    <?php } ?>

	<div class="container">

		<!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Brand</a>

		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">

			<?php nav_main($dbc, $path); ?>

			</ul>
		</div><!-- /.navbar-collapse -->

    </div>

</nav>