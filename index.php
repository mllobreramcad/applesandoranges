
	<?php get_header(); ?>
		<div class="clearfix">

		<section class="tagline">
	
			<p>Apples and Oranges! is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
				<h2>Not just good. Uncomparable.</h2>

		</section> 

		</div>



		<div class="clearfix">
		<article class="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title_attribute(); ?></h2></a>
			<?php the_content(); ?>

		</article>
		</div>

			<article class="sidebar">
			
			 <?php get_sidebar(); ?> 

			</article>

		<?php endwhile; else : ?>
		<p><?php_e('Sorry, no content'); ?></p>
	<?php endif; ?>



		<?php get_footer(); ?>