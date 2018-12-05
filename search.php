<?php get_header(); ?>
<main><div class="container"><div class="row">
  <div class="col-lg-9 col-md-12">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'minimus' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;

		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		<?php minimus__pagination(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
