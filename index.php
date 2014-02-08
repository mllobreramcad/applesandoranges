<?php get_header(); ?>
  <section class="tagline">
	  <p>Apples and Oranges! is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
		<h2>Not just good. Uncomparable.</h2>
  </section>
  <div class="clearfix">
	  <section class="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
			  <a href="<?php the_permalink(); ?>"><h2><?php the_title_attribute(); ?></h2></a>
        <?php the_content(); ?>
      </article>
			<?php endwhile; else : ?>
        <p><?php_e('Sorry, no content'); ?></p>
      <?php endif; ?>
    </section>
		<section class="sidebar">			
			 <?php get_sidebar(); ?> 
		</section>
	</div>
<?php get_footer(); ?>