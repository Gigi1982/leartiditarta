<?php /* Template Name: Aree Template */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="tarta-home">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
            <section class="tarta-intcanv">
                <img src="<?php echo get_the_post_thumbnail_url($_post->ID,'extra-large'); ?>" class="tarta-intcanv-bg">
            </section>
            <?php endif; ?>
            <?php 
                $area = get_field('aree');	
                if ($area):
            ?>
            <section class="tarta-intcanv-column">
                <div class="container">
                    <?php 
                        $areaBlocco = $area['blocco_area'];
                        foreach ($areaBlocco as $blocco):
                    ?>
                    <div class="tarta-aree-block">
                        <div class="row">
                            <div class="col-md-4">
                                <h1 class="h3 text-secondary"><?php echo $blocco['titolo']; ?></h1>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <div><?php echo $blocco['testo']; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>
            <?php endwhile; ?>

            <?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
