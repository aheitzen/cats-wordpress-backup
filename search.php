<?php
/**
 * Theme: Flat Bootstrap Child
 * 
 * The Template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package flat-bootstrap-child
 */

get_header(); ?>

<div class="container-fluid" id="category-search-header">
	<div class="row">
		<div class="col-md-12">
			<div class="category-search-main-header">
				<div class="category-search-main-header">
					<?php echo esc_html( get_search_query(  ) ); ?> 
				</div>
			</div>
		</div>
	</div>
</div>

<?#php get_template_part( 'content', 'header' ); ?>

<div class="container" id="category-search">
<div class="row"> <!-- id="main-grid"  --> <!-- id="post-center" -->

	<!-- <section id="primary" class="content-area col-md-8"> -->
		<!-- <main id="main" class="site-main" role="main"> -->

	
		<?php if ( have_posts() ) : ?>

			<?php // Start the Loop ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="col-md-4" >
				<div class="post-display">
			<?php //get_template_part( 'content', 'search' ); ?>
				<?#php get_template_part( 'content', 'page-posts' ); ?>
				
				<div class="post-category-img"><?php the_post_thumbnail (medium); ?></div>
				<h3><a class="post-categories-h3" href="<?php the_permalink(); ?>">
				<?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				</div>
				</div>
				
			<?php endwhile; ?>

			<?php get_template_part( 'content', 'index-nav' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		<!-- </main> --><!-- #main -->
	<!-- </section> --><!-- #primary -->


</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>