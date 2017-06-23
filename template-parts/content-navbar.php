<div class="container">
  <nav class="navbar navbar-light bg-faded rounded navbar-toggleable-md justify-content-center-md">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
          <span class="navbar-toggler-icon"></span>
      </button>
      <a href="<?php echo site_url(); ?>" rel="home" class="navbar-brand d-flex w-50 mr-auto">Brand <!--<small class="description"><?php echo bloginfo('description'); ?></small>--></a>
        <?php
            wp_nav_menu( array(
                'menu'              => 'main_menu',
                'theme_location'    => 'main_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse collapse',
                'container_id'      => 'collapsingNavbar3',
                'menu_class'        => 'nav navbar-nav ml-auto w-100 justify-content-end',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
                )
            );
        ?>
  </nav>
</div><!-- /.container -->
