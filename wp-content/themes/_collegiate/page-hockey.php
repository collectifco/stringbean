<?php
/* Template name: Baseball
 * For club pages
 *
 * @package _Collegiate
 */

get_header(); ?>
	
	<!--<?php the_post_thumbnail('large'); ?>-->
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="grid-full">

				<!--<h1><?php 
				  get_page_by_title( $page_title, $output, $post_type );
				?></h1>-->
				
				<div class="grid-full">
					<h1 class="entry-title" style="font-weight: 700"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				</div>
				<nav class="secondary-menu">
				    <?php wp_nav_menu( array( 'theme_location' => 'athletics' ) ); ?>
				</nav>
			
				<div class="grid-5-7 team-news">
					
					<?php // WP_Query arguments
					$args = array (
						'category_name'          => 'hockey',
					);
				
					// The Query
					$query = new WP_Query( $args );
					?>
					
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	
						<?php get_template_part( 'content', 'page' ); ?>
	
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							//if ( comments_open() || '0' != get_comments_number() )
								//comments_template();
						?>
		
						<?php endwhile; // end of the loop. ?>
						
				</div>
				
			
			
				<div class="post-news">
					<?php while ( have_posts() ) : the_post(); ?>
							
										<?php get_template_part( 'content', 'page' ); ?>
					
									<?php
										// If comments are open or we have at least one comment, load up the comment template
										//if ( comments_open() || '0' != get_comments_number() )
											//comments_template();
									?>
					
									<?php endwhile; // end of the loop. ?>
				
				</div>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

