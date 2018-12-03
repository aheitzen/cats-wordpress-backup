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

<?php while ( have_posts() ) : the_post(); ?>
<div class="container-fluid">
	<div class="row"></div>
	<div class="row">

		<div class="col-md-6 single-box">
			<div class="single-box-whole">
			<p class="single-p-text"><?php the_title( '<h3>', '</h3>' ); ?></p>
			<div class="single-break-point"></div>
			<p class="single-p-text"><strong><?php the_field('location_header');?></strong> <?php the_field('location'); ?></p>
			<p class="single-p-text"><strong><?php the_field('breed_header');?></strong> <?php the_field('cat_category'); ?></p>
			<p class="single-p-text"><strong><?php the_field('cats-favorite-toy-header');?></strong> <?php the_field('your_cats_favorite_toy'); ?></p>
			<p class="single-p-text"><strong><?php the_field('cat_fact_header');?></strong> <?php the_field('fun_fact'); ?></p>
			<p class="single-p-text" id="post-margin"><strong><?php the_field('what_you_love_about_your_cat_header');?></strong> <?php the_field('what_you_love_about_your_cat'); ?></p>
			<p class="single-p-text" id="post-margin"><strong><?php the_field('cat-social-media'); ?></strong><br>
			<?php 
				$link = get_field('instagram_link');
				if( $link ): ?>
				<a class="button" target="_blank" href="<?php echo $link; ?>"><i id="post-instagram" class="fab fa-instagram"></i></a>
			<?php endif; ?>
			<?php 
				$link = get_field('twitter_link');
				if( $link ): ?>
				<a class="button" target="_blank" href="<?php echo $link; ?>"><i id="post-twitter" class="fab fa-twitter"></i></a>
			<?php endif; ?>
			<?php 
				$link = get_field('youtube_link');
				if( $link ): ?>
				<a class="button" target="_blank" href="<?php echo $link; ?>"><i class="fab fa-youtube"></i></a>
			<?php endif; ?>
			<div class="post-button-group">
			<button>Send a message</button>
			<button>Back to categories page</button>
			</div>
			</div>
		</div>
		<div class="col-md-6 flex-center no-padding post-img-container">
			<!-- <div class="single-img"> -->
			<img class="post-img" src="<?php the_field('post_picture'); ?>" />
			<span class="img-caption"><?php the_field('image-caption'); ?></span>
				
			<!-- </div> -->
		</div>
		<div class="row">
			<div class="col-md-6" style="background-color: white; height: 6em">
				<?php previous_post_link( '%link','<i class="fas fa-arrow-left"></i>' ) ?>
			</div>
			<div class="col-md-6 pull-right" style="background-color: #EEBB21; height: 6em">
				<?php previous_post_link( '%link','<i class="fas fa-arrow-right"></i>' ) ?>
			</div>
			
			
		</div>
<?php endwhile; // end of the loop. ?>
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>