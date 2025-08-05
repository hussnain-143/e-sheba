<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="bg-white text-gray-900 transition-colors duration-300">


<header class="bg-blue-50 shadow sticky top-0 z-50 transition-colors duration-300">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">


    <a href="<?php echo home_url(); ?>" class="text-blue-600 font-bold text-3xl">
      <span class="text-black">E-</span>sheba
    </a>


    <nav class="main-menu hidden md:flex">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menu-items flex space-x-6',
            'fallback_cb'    => false,
        ));
    ?>
    </nav>


    <div class="hidden md:flex items-center space-x-4">
      <a href="#" class="text-sm px-4 py-2 border rounded-full text-blue-600 border-blue-600 hover:bg-blue-600 hover:text-white">Log in</a>
      <a href="#" class="text-sm px-4 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Sign up</a>
    </div>

    <div class="md:hidden flex items-center">
      <button id="menu-toggle" class="text-blue-600 text-2xl">☰</button>
    </div>
  </div>
</header>



<nav id="mobile-menu" class="hidden md:hidden bg-blue-200 shadow-lg py-4 space-y-2 transition-all duration-300 main-menu">
   <div class="container mx-auto py-4 ">
     <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menu-items flex space-x-6',
            'fallback_cb'    => false,
        ));
    ?>
    <div class="mt-10 flex justify-center gap-10">
        <a href="#" class="text-sm w-50 text-center px-4 py-2 border rounded-full text-blue-600 border-blue-600 hover:bg-blue-600 hover:text-white">Log in</a>
      <a href="#" class="text-sm w-50 text-center px-4 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Sign up</a>
    </div>
   </div>
</nav>



<script>
  const toggleBtn = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  toggleBtn?.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>

<?php wp_footer(); ?>
</body>
</html>
