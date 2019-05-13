<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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

<?php endwhile; ?>

<?php endif; ?>
