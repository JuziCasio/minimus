<footer><div class="container">
  <div class="row">
    <div class="col-lg-12 footer__container d-flex justify-content-between"><span class="footer__copyright">Did you like this site? - juzicasioigasio@gmail.com</span><div class="logo footer__logo"><?php the_custom_logo(); ?></div></div>
        <div class="col-lg-12"><nav class="footer__nav__menu"><ul class="menu d-flex justify-content-center">
  									<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'container'      => 'ul',
										'items_wrap'     => 'false',
										'menu_class'     => 'menu d-flex justify-content-end',
										'items_wrap'	 => '%3$s',
										'depth'          => 1,
										'link_before'    => '<li class="menu__item">',
										'link_after'     => '</li>',
									) );
								?>
  </ul></nav></div>
  </div>
</div></footer>
<?php wp_footer(); ?>
</body>
</html>
