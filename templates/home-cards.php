<?php
/**
 * Template Name: home-cards
 *
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cafinitybs4
 */

get_header(); ?>
<div class="banner">
	<div class="container">
		<div class="row justify-content-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main text-center" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--.row-->
	</div><!--.container-->
</div><!--.banner-->


		<div class="container">	
		<!-- 	<div class="row mt-5"> -->
			  <!--Dynamic query listing posts from "cards" category-->
      <?php 
      $args = array(
        'orderby'          => 'date',
        'order'            => 'ASC',
        'posts_per_page'   => 2,
        'post_per_row'     =>1,
        'category_name'  => 'cards'
        );

        // The Query
      $query2 = new WP_Query( $args );

      if ( $query2->have_posts() ) {
            // The Loop
        while ( $query2->have_posts() ) {
            $query2->the_post();
            ?>
            <!--Auto generated columnn-->
            <div class="row justify-content-center">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" alt="">
                        <a href="<?php echo get_permalink() ?>">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title"><?php  echo get_the_title(); ?></h4>
                        <!--Text-->
                        <p class="card-text"><?php echo get_the_excerpt();?></p>
                        <a href="<?php echo get_permalink() ?>" class="btn btn-outline-primary waves-effect">Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
</div><!--.row-->
                
            </div>
            <!--/.Auto generated columnn-->
            <?php
        }
        wp_reset_postdata();
    } ?>
    <!--/.Dynamic query listing posts from "cards" category-->
</div>
</div>
<!--/.Content-->
			<!-- </div> --><!--  .row -->
		</div><!--  .container -->
	
 
<?php

get_footer();
