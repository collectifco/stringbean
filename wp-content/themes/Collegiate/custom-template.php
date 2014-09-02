<?php
// Template Name: My custom template
 ?>
 
<?php get_header(); ?>

<div id="content">
	
	<div id="inner-content" class="wrap clearfix">
	
		<div id="main" class="twelvecol first clearfix" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<h1><?php the_title(); ?></h1>	
				<h2><?php the_author(); ?></h2>
				<h6><?php the_date(); ?></h6>
				
				
				<div class="entry">
				<?php if ( has_post_thumbnail()) : ?>
				<?php the_post_thumbnail(); ?> <?php endif; ?>
				<?php the_content('Read the rest of this entry &raquo;'); ?> </div>
				
				<div class="navigation">
				<div class="alignleft"><?php previous_posts_link('&laquo; Previous
				Entries') ?></div>
				<div class="alignright"><?php next_posts_link('Next Entries
				&raquo;','') ?></div>
				</div>
				
			
			<?php endwhile; endif; ?>
		
		</div>
 	
 	</div>
 	
 </div>
 
 <?php get_footer(); ?>