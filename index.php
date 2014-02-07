
	<?php get_header(); ?>


		<section class="tagline">
	
			<p>Apples and Oranges! is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
				<h2>Not just good. Uncomparable.</h2>

		</section> 





		<div class="clearfix">
		<article class="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title_attribute(); ?></h2></a>
			<?php the_content(); ?>

		</article>

				<?php endwhile; else : ?>
		<p><?php_e('Sorry, no content'); ?></p>
	<?php endif; ?>

					<article class="sidebar">
			
			 <?php get_sidebar(); ?> 

			</article>





			</div>




		<?php get_footer(); ?>