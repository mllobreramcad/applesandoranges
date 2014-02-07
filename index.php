
	<?php get_header(); ?>
		<section>
	
			<section>
				<p>Apples and Oranges! is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
				<h2>Not just good. Uncomparable.</h2>

			</section> 

		</section>

		<article>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title_attribute(); ?></h2></a>
			<?php the_content(); ?>

			<!--<p>Pickled labore ad, Thundercats church-key kogi selvage mustache tempor tousled lo-fi hella direct trade bespoke stumptown. High Life in locavore, pariatur American Apparel sunt fixie odio. Exercitation beard incididunt post-ironic chillwave tattooed, enim Shoreditch Blue Bottle artisan cornhole dreamcatcher aliqua craft beer photo booth. Butcher cred pug Etsy nulla, XOXO Bushwick forage farm-to-table Godard tousled fingerstache in deep v. Blog labore hella sartorial aesthetic, chia leggings authentic. Marfa adipisicing voluptate iPhone anim mlkshk biodiesel in. Truffaut authentic sapiente aliquip lomo cray, id veniam Marfa accusamus tousled artisan Terry Richardson eiusmod.</p>-->


			</article>

		<?php endwhile; else : ?>
		<p><?php_e('Sorry, no content'); ?></p>
	<?php endif; ?>

			<article class="col1">
			
			 <?php get_sidebar(); ?> 

			</article>

		<?php get_footer(); ?>