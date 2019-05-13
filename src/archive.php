<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="tarta-category tarta-workshop">
            <div class="container">
                <h1><?php esc_html_e( 'Archives', 'tartatheme' ); ?></h1>
                <div class="row">
                    <?php get_template_part( 'loop' ); ?>
                </div>
                <?php get_template_part( 'pagination' ); ?>
            </div>	
			
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
