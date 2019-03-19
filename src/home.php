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
                        </div>
                    </div>
                </div>
            </section>

            <?php endwhile; ?>

            <?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
