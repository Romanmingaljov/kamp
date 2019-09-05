<?php function fragment_header() { ?>
	<meta charset="utf-8" />
    <title><?php siteName(); ?><?php //pageTitle(); ?></title>

    <meta charset="windows-1251">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<div class="container">
		<header class="row">
			<div class="col-md-6">
				<a href="http://www.sevsu.ru"><img src="images/Logo.png">
				<h3 style="color: white">СЕВАСТОПОЛЬСКИЙ <br>ГОСУДАРСТВЕННЫЙ <br>УНИВЕРСИТЕТ </h3>
				</a>
			</div>
			<div class="">
			<h2 class="text-right"><?php siteName(); ?></h2>
			</div>
		</header>	
		<nav class="row navbar navbar-default"  >
            <div class="collapse navbar-collapse ">
            	<div id="exit">
            	</div>
                <ul class="nav navbar-nav dropdown">
					<?php fragment_menu(); ?>
				</ul>
			</div>
		</nav>	
	</div>
<?php } ?>