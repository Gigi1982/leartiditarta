<?php get_header(); ?>

	<main role="main" aria-label="Content">
	<!-- section -->
	<section>

	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
			<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
            <section class="tarta-intcanv">
                <img src="<?php echo get_the_post_thumbnail_url($_post->ID,'extra-large'); ?>" class="tarta-intcanv-bg">
            </section>
			<?php endif; ?>
            <section class="tarta-intcanv-column">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="h3 text-secondary"><?php the_title(); ?></h1>
                            <?php 
                            $workshopDate = get_field('data_workshop');
                            if ($workshopDate): ?>
                            <div class="tarta-workshop-date label text-uppercase mb-3">
                                <?php echo $workshopDate; ?>
                            </div>
                            <?php endif; ?>
                            <?php 
                            $workshopLuogo = get_field('luogo_workshop');
                            if ($workshopLuogo): ?>
                            <div class="tarta-workshop-date label text-uppercase">
                                <?php echo $workshopLuogo; ?>
                            </div>
                            <?php endif; ?>
                            <div class="tarta-workshop-metadata d-flex justify-content-between mt-4">
                                <div class="tarta-book-button">
                                    <span class="label-badge d-block mr-3">PRENOTAZIONE OBBLIGATORIA</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 offset-md-1">
                            <div><?php the_content(); ?></div>
                        </div>
                    </div>
                </div>
            </section>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
