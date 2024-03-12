<footer id="footer">

  <div class="container py-2">
    <div class="flex flex-row">
      <div class="w-full sm:w-1/3 logo flex items-center">
        <a href="<?php echo esc_url(get_home_url()); ?>">
          <img
            src="<?php bloginfo('template_url'); ?>/library/images/logo.png"
            alt="<?php echo esc_url(get_bloginfo('name')); ?>"
            class="block"
            width=100
            priority
          />
        </a>
      </div>
      <div class="w-full sm:w-2/3 logo flex items-center justify-center sm:justify-end">

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer',
            'container' => 'nav',
            'menu_id' => 'footer-menu-container',
            'menu_class' => 'flex flex-row gap-4',
            'walker' => new Ocupop_Nav_Menu()
          )
        );
        ?>
      </div>
    </div>
  </div>

  <div class="w-full bg-dark text-light">
    <div class="container">
      <div class="sm:flex sm:flex-row text-center py-2 text-sm justify-between">
        <div class="copyright logo">
          &copy;<?php echo esc_attr(gmdate('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?>
        </div>

        <div class="">
          <?php
          ocupop_show_social_icons();
          ?>
        </div>
      </div>
    </div>

  </div>

  <?php wp_footer(); ?>
</footer>

</body>
</html>