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
        <section class="tarta-workshop module-padding">
            <div class="container">
                <?php
                    $categories = get_terms( 'laboratori_category', 'hide_empty=0');            
                ?>
                <nav class="archive-workshop-navigation d-flex justify-content-center pb-4">
                    <div class="buttons-container">
                        <?php
                            foreach($categories as $category){
                                echo '<a href="'.get_term_link($category->term_id).'" class="btn btn-link">'.$category->name.'</a> ';
                            }
                        ?>
                    </div>
                </nav>
                <div class="row">
                    <?php 
                        while ($workshopQuery->have_posts()) : $workshopQuery->the_post();
                    ?>

                    <div class="col-md-4">
                        <div class="tarta-workshop-item">
                            <a href="<?php the_permalink(); ?>" class="tarta-workshop-link"></a>
                            <div class="tarta-workshop-img d-flex flex-column">
                                <img src="<?php echo get_the_post_thumbnail_url($_post->ID,'medium'); ?>">
                            </div>
                            <div class="tarta-workshop-left">
                                <h3 class=""><?php the_title(); ?></h3>
                                <?php 
                                    $terms = get_the_terms( get_the_ID(), 'laboratori_category' );
                                    foreach ($terms as $term):
                                ?>
                                <a class="btn btn-link btn-sm workshop-category" href="<?php echo get_term_link($term->term_id);?>"><?php echo $term->name?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
        
        

        <?php endif; ?>
	</main>
    <?php endwhile; ?>

    <?php endif; ?>


<?php get_footer(); ?>
