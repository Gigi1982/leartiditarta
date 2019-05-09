<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="tarta-home">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <section class="tarta-homecanv">
                <div class="container">
                    <div class="tarta-homecanv-inner">
                        <h3 class="text-primary">teatro  •  arte  •  relazione d'aiuto  •  terapie a mediazione artistica  •  arti marziali</h3>
                        <h1 class="white"><?php the_content(); ?></h1>
                        <div class="white">L’Arte in genere, dal teatro alla danza, dalla pittura alla fotografia, è una modalità di autoconoscenza ed espressione, basata sulla sperimentazione dell’Essere, del Fare e del Diventare, mettendosi alla prova per conoscere i propri limiti e trovare nuovi linguaggi in grado di comunicare efficacemente quanto si prova e si è come persone: è un mezzo di incontro e conoscenza, confronto e scoperta.</div>
                    </div>
                </div>
            </section>
            <section class="tarta-homethree">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="tarta-homethree-item fondino-primary">
                            <header class="tarta-homethree-itemheader d-md-flex align-items-center justify-content-between">
                                <span class="tarta-homethree-icon"><embed src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/counseling.svg"></span>
                                <h3>Counseling</h3>
                            </header>
                            <div class="tarta-homethree-content">
                                <div>Persone che si incontrano, condividono, cambiano.
Superare alcuni momenti di blocco della vita è possibile!
<strong>Incontrarsi e parlarne insieme dà la possibilità di conoscersi e poter imparare a come aiutarsi</strong>. Il Counseling è una modalità di relazione di aiuto non clinica.</div>
                            </div>
                            <div class="tarta-homethree-cta pt-3">
                                <a href="#" class="btn btn-outline-secondary btn-sm">SCOPRI</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tarta-homethree-item fondino-secondary">
                            <header class="tarta-homethree-itemheader d-md-flex align-items-center justify-content-between">
                                <span class="tarta-homethree-icon"><embed src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/teatro-terapia.svg"></span>
                                <h3>Teatro e Teatroterapia</h3>
                            </header>
                            <div class="tarta-homethree-content">
                                <div>Persone che si incontrano, condividono, cambiano.
Superare alcuni momenti di blocco della vita è possibile!
<strong>Incontrarsi e parlarne insieme dà la possibilità di conoscersi e poter imparare a come aiutarsi</strong>. Il Counseling è una modalità di relazione di aiuto non clinica.</div>
                            </div>
                            <div class="tarta-homethree-cta pt-3">
                                <a href="#" class="btn btn-outline-secondary btn-sm">SCOPRI</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tarta-homethree-item fondino-thirdary">
                            <header class="tarta-homethree-itemheader d-md-flex align-items-center justify-content-between">
                                <span class="tarta-homethree-icon"><embed src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/corso-di-formazione.svg"></span>
                                <h3>Corso di formazione</h3>
                            </header>
                            <div class="tarta-homethree-content">
                                <div>Persone che si incontrano, condividono, cambiano.
Superare alcuni momenti di blocco della vita è possibile!
<strong>Incontrarsi e parlarne insieme dà la possibilità di conoscersi e poter imparare a come aiutarsi</strong>. Il Counseling è una modalità di relazione di aiuto non clinica.</div>
                            </div>
                            <div class="tarta-homethree-cta pt-3">
                                <a href="#" class="btn btn-outline-secondary btn-sm">SCOPRI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tarta-homedesc">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="tarta-homedesc-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/content/hp/anna.jpg">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tarta-homedesc-content bg-primary">
                            <h3 class="h2">Mi presento, sono Anna Russo.</h3>
                            <div class="tarta-homedesc-text">Teatro, Teatroterapia e Counseling sono le mie materie. Facendo “abitare” l’arte si stimola la visione introspettiva e il raggiungimento di una consapevolezza razionale che muove il motore del cambiamento verso uno “stare meglio” nella vita di tutti i giorni, trovando una valida possibilità di espressione e comunicazione nel fare artistico e relazionale.</div>
                            <div class="tarta-homedesc-button">
                                <a href="#" class="btn btn-outline-secondary btn-sm">LEGGI DI PIù</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            
            <section class="tarta-hometwo">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="tarta-homenews p-3 p-md-5">
                            <header class="tarta-bordered-header d-md-flex">
                                <span class="tarta-home news-icon"><embed src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/corso-di-formazione.svg"></span>
                                <h3>News di t.a.r.t.a.</h3>
                            </header>
                            <?php 
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $count_posts = wp_count_posts();
                                $published_posts = $count_posts->publish;
                                $newsHomeArgs = array(
                                    'paged'            => $paged,
                                    'post_type'        => 'post',
                                    'post_status'      => 'publish',
                                    'order'				=> 'DESC',
                                    'suppress_filters' => true,
                                    'posts_per_page'   => 3,
                                );
                                $newsHomeQuery = new WP_Query( $newsHomeArgs );       
                                if ($newsHomeQuery->have_posts()):
                            ?>
                            <div class="swiper-container tarta-newswiper">
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <?php while ($newsHomeQuery->have_posts()) : $newsHomeQuery->the_post(); ?>
                                    <div class="swiper-slide">
                                        <header class="tarta-newsitem-header">
                                            <span class="news-date">29 dicembre 2018</span>
                                            <h3><?php the_title(); ?></h3>
                                        </header>
                                        <div class="tarta-newsitem-text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                                <?php if($published_posts >1) : ?>
                                <div class="swiper-pagination"></div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tarta-homenewsletter p-3 p-md-5">
                            <header class="tarta-homenewsletter-header">
                                <p>Contattami per avere maggiori informazioni, per conoscere i costi dei vari workshop, per soddisfare le tue curiosità, per esprimere pareri...</p>
                                <div class="tarta-homenewsletter-contact">
                                    <a href="#" class="btn btn-primary btn-block">CONTATTAMI</a>
                                </div>
                            </header>
                            <!-- Begin MailChimp Signup Form -->
                            <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                            <div id="mc_embed_signup">
                            <form action="//silviacasarone.us16.list-manage.com/subscribe/post?u=1a0e72349ddb4015f8857c955&amp;id=a5364cc6b0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                <h2><label for="mce-EMAIL">Iscriviti alla newsletter</label></h2>
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Inserisci il tuo indirizzo e-mail" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1a0e72349ddb4015f8857c955_a5364cc6b0" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Iscriviti" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                            </div>

                            <!--End mc_embed_signup-->
                        </div>
                        
                    </div>
                </div>
            </section>
            <section class="tarta-workshop">
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
                <div class="row no-gutters">
                    <?php 
                        while ($workshopQuery->have_posts()) : $workshopQuery->the_post();
                    ?>
                    
                    <div class="col-md-5">
                        <div class="tarta-workshop-left p-3 p-md-5">
                            <a href="<?php echo get_permalink(); ?>" class="tarta-link"></a>
                            <header class="tarta-bordered-header d-md-flex">
                                <h3>Workshop</h3>
                            </header>
                            <h3 class=""><?php the_title(); ?></h3>
                            <div class="tarta-workshop-text"><?php the_content(); ?></div>
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
                                <div class="tarta-social-button d-flex">
                                    <a href="#" class="btn btn-round btn-blue mr-3"><i class="icon icon-comment"></i></a>
                                    <a href="#" class="btn btn-round btn-blue"><i class="icon icon-phone"></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <div class="col-md-7">
                        <div class="tarta-workshop-img">
                            <img src="<?php echo get_the_post_thumbnail_url($_post->ID,'extra-large'); ?>">
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
                
                <?php endif; ?>
            </section>
            <?php endwhile; ?>

            <?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
