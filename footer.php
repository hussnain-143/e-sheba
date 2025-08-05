<footer class="bg-blue-600 text-white  mt-16 border-t border-gray-200">
  <div class="container mx-auto px-4 grid grid-cols-1 lg:grid-cols-3 gap-20 py-10">
    <div>
      <a href="<?php echo home_url(); ?>" class="text-white font-bold text-xl">
        E-sheba
      </a>
      <p class="mt-4 text-sm">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nihil sunt explicabo rem corrupti unde quam sequi, quisquam veritatis nostrum inventore saepe magni impedit voluptatibus. Odit necessitatibus culpa assumenda reprehenderit!
      </p>
        <div class="mt-4 flex space-x-4">
            <a href="#" class="text-white hover:text-blue-400 text-lg" aria-label="Facebook">
                <span class="dashicons dashicons-facebook-alt"></span>
            </a>
            <a href="#" class="text-white hover:text-blue-400 text-lg" aria-label="Twitter">
                <span class="dashicons dashicons-twitter"></span>
            </a>
            <a href="#" class="text-white hover:text-blue-400 text-lg" aria-label="LinkedIn">
                <span class="dashicons dashicons-linkedin"></span>
            </a>
        </div>
    </div>

    <div>
      <h3 class="text-xl font-semibold mb-3">Links</h3>
         <?php
            wp_nav_menu(array(
            'theme_location' => 'footer',
            'container'      => false,
            'menu_class'     => 'space-y-2 text-sm footer-menu',
            'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
            'fallback_cb'    => false,
            ));
        ?>
    </div>

    <!-- Contact Info -->
    <div>
      <h3 class="text-xl font-semibold mb-3">Address</h3>
        <div class="w-full h-50 lg:w-75 lg:h-35   bg-gray-300 rounded-2xl"></div>
    </div>
  </div>
    <hr class="border-gray-200">
  <div class="py-5 text-center text-white text-md">
    &copy; <?php echo date('Y'); ?> E-sheba. All rights reserved.
  </div>
</footer>
<!-- ✅ End Footer -->
