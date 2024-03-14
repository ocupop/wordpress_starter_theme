<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>

<header id="header" class=' sticky top-0 bg-white z-50'>

  <a href="#main" class="screen-reader-shortcut">Skip to main content</a>
  <div class='container py-4'>
    <div class='flex flex-row justify-between'>
      <div class="logo flex items-center">
        <a href="/" class="flex flex-row items-center gap-4 no-underline text-dark hover:text-primary">
          <img
            src="<?php bloginfo('template_url'); ?>/library/images/logo.png"
            alt="Logo"
            class="dark:invert"
            width=70
            priority
          />
          <h1 class="text-lg"><?php echo esc_html(get_bloginfo('name')); ?></h1>
        </a>
      </div>

      <nav aria-label="Main Menu" x-data="{ mobileMenuOpen: false }" @click.outside="mobileMenuOpen = false" class="disclosure-nav open-on-focus_DISABLED top-0 inset-x-0 transition flex justify-stretch">

        <button :aria-expanded="mobileMenuOpen" type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="mobile-menu-toggle md:hidden text-white relative bg-transparent border-none">
          <span class="sr-only">Toggle main menu</span>
          <div class="hamburger space-y-2 padding-2" >
            <div class="w-8 h-1 bg-gray-600 rounded-full"></div>
            <div class="w-8 h-1 bg-gray-600 rounded-full"></div>
            <div class="w-8 h-1 bg-gray-600 rounded-full"></div>
          </div>
        </button>

        <div class="nav-wrapper justify-between" :class="{'open': mobileMenuOpen } ">

          <?php
            wp_nav_menu(
                array(
                'theme_location' => 'primary-nav',
                'container' => 'primary-nav',
                'walker' => new Ocupop_Nav_Menu()
                )
            );

            wp_nav_menu(
                array(
                'theme_location' => 'utility-nav',
                'container' => 'utility-nav',
                'walker' => new Ocupop_Nav_Menu()
                )
            );
            ?>
        </div>

      </nav>

    </div>
  </div>
</header>







