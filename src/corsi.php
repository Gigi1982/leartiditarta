<?php /* Template Name: Corsi Template */ get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main role="main" aria-label="Content">
        <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $workshopArgs = array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'laboratori',
                'order'				=> 'ASC'
            );
            $workshopQuery = new WP_Query($workshopArgs);       
            if ($workshopQuery->have_posts()):
        ?>
        <div class="container">
            <div class="row">
                <?php 
                    while ($workshopQuery->have_posts()) : $workshopQuery->the_post();
                ?>

                <div class="col-md-4">
                    <div class="tarta-workshop-img">
                        <img src="<?php echo get_the_post_thumbnail_url($_post->ID,'medium'); ?>">
                    </div>
                    <div class="tarta-workshop-left p-3 p-md-5">
                        <h3 class=""><?php the_title(); ?></h3>
                    </div>
                </div>

                <?php 
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
        

        <?php endif; ?>
	</main>
    <?php endwhile; ?>

    <?php endif; ?>


<?php get_footer(); ?>
