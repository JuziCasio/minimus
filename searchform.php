<form class="flex-grow-1 header__search" action="<?php echo home_url( '/' ) ?>">
   <div class="search__container d-flex"><input class="search__container__input flex-grow-1" type="test" name="s" value="<?php echo get_search_query() ?>" placeholder="Search..."> 
   <button id="searchsubmit" class="search__container__button" type="submit"><i class='fas fa-search'></i></div>
  </form>