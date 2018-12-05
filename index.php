<?php get_header(); ?>
<main><div class="container"><div class="row">
  <div class="col-lg-9 col-md-12">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;?>
			<?php minimus__pagination(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
