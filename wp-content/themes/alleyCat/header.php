<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Alley Cat</title>
    <link rel="stylesheet" id="customstyle-css" href="/AlleyCat/wp-content/themes/alleyCat/assets/css/main.css" type="text/css" media="all">
    
    <?php wp_head(); ?>
</head>
<body>
<div class="row">

<div class="col-sm-12">

			<div class="d-flex justify-content-center">	
					<h1 id="title">Manawatu Alley Cat </h1>
			</div>

			<div class="d-flex justify-content-center">	
					<?php the_post_thumbnail('large'); ?>
			</div>

</div>

	<div class="col-sm-12">
		<div class="d-flex justify-content-center">	

					<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
							<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
								<?php
								wp_nav_menu( array(
									'theme_location'    => 'header_menu',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker(),
								) );
								?>
							</div>
						</nav>
				
				</div>
		</div>

</div>