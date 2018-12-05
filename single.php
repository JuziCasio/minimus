<?php get_header(); ?>
<main><div class="container"><div class="row">
  <div class="col-lg-9 col-md-12">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'single' );

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		endwhile;
		?>
		<?php wp_link_pages(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

