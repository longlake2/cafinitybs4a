<?php
/**
 * Template Name: about
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

						get_template_part( 'template-parts/content', 'about' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div><!--.banner-->

<?php
// Grab the metadata from the database
$leftcol = get_post_meta( get_the_ID(), '_cafinitybs4_left', true );
$rightcol = get_post_meta( get_the_ID(), '_cafinitybs4_right', true );
// Echo the metadata
// Below includes html data validation see ******https://codex.wordpress.org/Data_Validation
?>
<div class="about-columns">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo wp_kses_post($leftcol); ?>		
		</div><!--.col-md-6-->
		<div class="col-md-6">
			<?php echo wp_kses_post($rightcol); ?>
		</div><!--.col-md-6-->
	</div><!--.row-->
</div><!--.container-->
</div><!--.about-columns-->
<?php

get_footer();
