    <article id="post-<?php the_ID();?>" class="post" <?php post_class(); ?>>
<h1 class="search__header align-self-end"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
<div class="metainf">
<i class="far fa-clock"></i> <?php the_time('j F Y');?> | <i class="far fa-user"></i> <?php the_author_posts_link();?> | <i class="far fa-bookmark"></i> <?php the_category( $separator = ' / ');?> | <?php the_tags( $before = '<i class="fas fa-tags"></i> ');?></div>
<div class="posts__text">
<a href="<?php the_permalink();?>"><p class="posts__readmore">Read more...</p></a>
</div></article>