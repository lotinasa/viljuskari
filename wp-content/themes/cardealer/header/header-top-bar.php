<div class="top-bar">

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-2">

				<?php get_template_part('header/header', 'login'); ?>

			</div>

			<?php if ( class_exists('woocommerce') && tmm_show_header_cart() ) { ?>

				<div class="col-md-8 col-xs-8">

					<?php if ( function_exists( 'dynamic_sidebar' ) AND dynamic_sidebar( 'top_sidebar' ) ); ?>

				</div>
				<div class="col-md-1 col-xs-2">

					<?php get_template_part('header/header', 'cart'); ?>

				</div>

			<?php } else { ?>

				<div class="col-md-9 col-xs-10">

					<?php if ( function_exists( 'dynamic_sidebar' ) AND dynamic_sidebar( 'top_sidebar' ) ); ?>

				</div>

			<?php } ?>

		</div>
	</div>

</div>