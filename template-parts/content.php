    <article id="post-<?php the_ID();?>" class="post"<?php post_class(); ?>>
<div class="posts__containerimg d-flex" style=" background: url(<?php the_post_thumbnail_url();?>) top center no-repeat  !important;
  -webkit-background-size: cover  !important; 
          background-size: cover  !important;
"><h1 class="posts__header align-self-end"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1></div><div class="metainf">
<i class="far fa-clock"></i> <?php the_time('j F Y');?> | <i class="far fa-user"></i> <?php the_author_posts_link();?> | <i class="far fa-bookmark"></i> <?php the_category( $separator = ' / ');?> | <?php the_tags( $before = '<i class="fas fa-tags"></i> ');?></div>
<div class="posts__text"><?php the_excerpt();?>
<a href="<?php the_permalink();?>"><p class="posts__readmore">Read more...</p></a>
</div></article>