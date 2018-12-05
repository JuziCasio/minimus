    <article id="post-<?php the_ID();?>" class="post" <?php post_class(); ?>>
<div class="post__containerimg d-flex" style=" background: url(<?php the_post_thumbnail_url();?>) top center no-repeat  !important;
  -webkit-background-size: cover  !important; 
          background-size: cover  !important;
"><h1 class="post__header align-self-end"><?php the_title();?></h1></div>
<div class="posts__text"><?php the_content();?>
<div class="metainf">
<i class="far fa-clock"></i> <?php the_time('j F Y');?> | <i class="far fa-user"></i> <?php the_author_posts_link();?> | <i class="far fa-bookmark"></i> <?php the_category( $separator = ' / ');?> | <?php the_tags( $before = '<i class="fas fa-tags"></i> ');?></div>
</div></article>