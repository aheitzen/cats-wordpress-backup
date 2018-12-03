<?php /* Template Name: Home Page */ 


get_header(); ?>

<?#php get_template_part( 'content', 'header' ); ?>

	<div class="container-fluid" id="hero-section">
		<div class="row">
			<div class="col-md-12 no-padding">
			<div><h1 class="title-h1">pawsitively purfect</h1></div>
				<img class="img-responsive full-screen-image" src="<?php the_field('image'); ?>" />
				


			</div>
			
		</div>
	</div>
	<div class="container-fluid" id="mission-statement">
		<div class="row">
			<div class="col-md-5 no-padding">
				<?php if( get_field('mission-image') ): ?>
					<img class="img-responsive mission-image" alt="Responsive image" src="<?php the_field('mission-image'); ?>" />
				<?php endif; ?>
			</div>
			<div class="col-md-7 no-padding full-height">
				<div class="mission-statment">
					<h1 class="text-center mission-header"><?php the_field('mission-header-text'); ?></h1>
					<p class="mission-statement-paragraph"><?php the_field('mission-text'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="features-section">
		<div class="row">
			<div class="col-md-6" id="features-type-section">
				<h1>Furtastic Features</h1>
				<h2>So many features, so little time</h2>
			</div>
			<div class="col-md-6">
				<i class="fas fa-cat"></i>
				<i class="fas fa-share"></i>
				<i class="fas fa-share-alt"></i>
				<i class="fas fa-mobile-alt"></i>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="featured-fealines-h1">Find Bengals in your area <i class="fas fa-angle-right"></i></h1>
			</div>
		</div>
		<div class="row">
			
								<?php 

$posts = get_posts(array(
	'category' => 3,
	'numberposts' => 6
));

if ($posts) {

	foreach($posts as $post) {
		?>
		<div class="col-md-4">
			<div class="post-display">
		<div class="post-category-img"><?php
		the_post_thumbnail (medium);?></div>
		<h3><a class="post-categories-h3" href="<?php the_permalink(); ?>">
				<?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
		
			
			</div>
		</div>
	<?php
	}
	// RESTORES THE GLOBAL $POST VARIABLE
	wp_reset_postdata();
}
?>

		</div>

		<div class="row second-featured-felines">
			<div class="col-md-12">
				<h1 class="featured-fealines-h1">Find Russian Blues in your area <i class="fas fa-angle-right"></i></h1>
			</div>
		</div>
		<div class="row second-featured-felines">
	
								<?php 

$posts = get_posts(array(
	'category' => 4,
	'numberposts' => 6
));

if ($posts) {

	foreach($posts as $post) {
		?>
		<div class="col-md-4">
			<div class="post-display">
		<div class="post-category-img"><?php
		the_post_thumbnail (medium);?></div>
		<h3><a class="post-categories-h3" href="<?php the_permalink(); ?>">
				<?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
		
			
			</div>
		</div>
	<?php
	}
	// RESTORES THE GLOBAL $POST VARIABLE
	wp_reset_postdata();
}
?>
		
		</div>
	</div>
	
	<div class="container" id="search-and-rescue">
		<div class="row">
			
			<div class="col-md-6">
				<h3 class="search-and-filter-h3">Find your Favorite Kitties</h3>
				<?php echo do_shortcode( '[searchandfilter taxonomies="search,category"]' ); ?>
			</div>
			<div class="col-md-6 no-padding">
				
					<img src="<?php the_field('search_img'); ?>" />

			</div>
		</div>
	</div>
	

	
<div class="container-fluid" id="social-media">
	<div class="row">
		<div class="col-md-12 text-center">
			<h3 class="social-media-header">From our Members</h3>
		</div>
	</div>
	<div class="row">
		<div id="myCarousel" class="carousel slide"  data-interval="false" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <p class="test-paragraphs">I love Pawsitively Purfect! Browsing through all the fur-babies<br> brings me so much joy and happiness!</p>
    </div>

    <div class="item">
      <p class="test-paragraphs">Searching for cats really brightens my day, I love seeing other <br>Bengals just like my kitty, Scout.</p>
    </div>

    <div class="item">
      <p class="test-paragraphs">Meow, meow, meow, meow!  Pawsitively Purfect helps <br>me connect with all the cat lovers in my area.</p>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
    <i class="fas fa-arrow-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="fas fa-arrow-right"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3 class="social-media-callouts text-center" id="pp">@pawsitively perfect</h3>
			<h3 class="social-media-callouts text-center">#fantasticfelines</h3>
		</div>
	</div>
</div>



<?php get_footer(); ?>
