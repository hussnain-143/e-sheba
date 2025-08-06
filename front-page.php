<?php
/**
 * Template Name: Medical Landing Home
 * Template Post Type: page
 */
get_header();
?>

<!-- Hero Section -->
<section class="relative bg-blue-50 text-gray-900 pb-0 overflow-hidden">

  <!-- Background Circle -->
  <div class="size-250 bg-blue-200 right-0 top-[5rem] z-0 rounded-full absolute "></div>

  <!-- Content Container -->
  <div class="max-w-[1200px] mb-10 lg:mb-0 relative z-40 container mx-auto px-4 flex flex-col-reverse lg:flex-row items-center gap-10 lg:gap-30">

    <!-- Left Content -->
    <div class=" text-center mb-10 lg:text-left flex-1 space-y-15">
      <?php if (function_exists('get_field')) : ?>
        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            <?php 
                $title = get_field('hero_title') ?: 'Get the Best Medical Support Instantly';
                echo esc_html($title); 
            ?>  
        </h1>
        <p class="mt-4 text-gray-600">
            <?php 
                $desc = get_field('hero_description') ?: 'Find expert doctors and medical specialists online 24/7 to support your healthcare journey.';
                echo esc_html(wp_trim_words($desc, 12)); 
            ?>
        </p>
      <?php endif; ?>

      <!-- Search Filters -->
      <div class="mt-8 bg-white shadow-md rounded-full w-full inline-block px-2 md:px-6 py-4">
        <form action="" class="flex flex-wrap items-center justify-between gap-1 sm:gap-6">
          <span class="flex items-center gap-2 flex-1 min-w-0">
            <span class="dashicons dashicons-admin-users text-blue-500"></span>
            <select class="p-2 rounded border text-gray-700 bg-white outline-none border-none w-full">
              <option disabled selected>Doctor's Name</option>
              <option>Dr. A</option>
              <option>Dr. B</option>
            </select>
          </span>

          <span class="flex items-center gap-2 flex-1 min-w-0">
            <span class="dashicons dashicons-location text-blue-500"></span>
            <select class="p-2 rounded border text-gray-700 bg-white outline-none border-none w-full">
              <option disabled selected>Location</option>
              <option>Lahore</option>
              <option>Islamabad</option>
            </select>
          </span>

          <button type="submit" class="bg-blue-600 hover:bg-blue-700 transition text-white p-3 rounded-full">
            <span class="dashicons dashicons-search"></span>
          </button>
        </form>
      </div>
    </div>

    <!-- Right Image -->
    <div class="flex-1 flex justify-center lg:justify-end relative lg:bottom-[-200px]">
        <?php
            $hero_image = get_field('hero_image');

            $img_url = is_array($hero_image) && !empty($hero_image['url'])
                ? $hero_image['url']
                : 'https://i.pinimg.com/474x/28/90/51/28905133f922c06fd8a2c8a72ea3266a.jpg';

            $img_alt = is_array($hero_image) && !empty($hero_image['alt'])
                ? $hero_image['alt']
                : 'Hero image';
        ?>
        <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" class="w-[90%] max-w-sm lg:max-w-md relative z-10 object-contain rounded-2xl hover:shadow-2xl hover:scale-105 transition duration-500">
    </div>
  </div>

  <!-- Bottom Stats -->
  <div class="bg-blue-600 py-10 mx-auto z-10 text-white relative ">
    <div class=" max-w-[1200px]  container mx-auto px-4 grid lg:grid-cols-2 gap-6">
     <div class="grid grid-cols-3 gap-6" >
       <div>
        <h2 class="text-3xl font-bold">24/7</h2>
        <p class="text-white/80">Online Support</p>
      </div>
      <div>
        <h2 class="text-3xl font-bold">100+</h2>
        <p class="text-white/80">Doctors</p>
      </div>
      <div>
        <h2 class="text-3xl font-bold">1M+</h2>
        <p class="text-white/80">Active Patients</p>
      </div>
     </div>
     <div></div>
    </div>
  </div>
</section>

<!-- Consulting Specialists -->
<section class="py-20">
  <div class="max-w-[1200px] container mx-auto px-4">
    <h2 class="text-4xl font-bold mb-12">Our Consulting Specialists</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

      <!-- Specialist A -->
      <?php 
        $title_a = get_field('specialists_title_a') ?: 'Cardiology Specialist';
        $desc_a  = get_field('consulting_specialists_description_a') ?: 'Expert in heart-related treatments and diagnostics.';
      ?>
      <div
        class="specialist-card cursor-pointer bg-white p-6 rounded-2xl border border-gray-200 shadow hover:bg-blue-600 hover:text-white transition duration-300"
        data-title="<?php echo esc_attr($title_a); ?>"
        data-description="<?php echo esc_attr($desc_a); ?>"
      >
        <div class="size-12 bg-blue-100 rounded-full text-blue-600 flex justify-center items-center mb-5">
          <span class="dashicons dashicons-heart text-[60px] leading-none"></span>
        </div>
        <h3 class="font-bold text-lg mb-2"><?php echo esc_html($title_a); ?></h3>
        <p class="text-sm"><?php echo esc_html(wp_trim_words($desc_a, 10, '...')); ?></p>
      </div>

      <!-- Specialist B -->
      <?php 
        $title_b = get_field('specialists_title_b') ?: 'Neurology Specialist';
        $desc_b  = get_field('consulting_specialists_description_b') ?: 'Provides expert care for neurological conditions and disorders.';
      ?>
      <div
        class="specialist-card cursor-pointer bg-white p-6 rounded-2xl border border-gray-200 shadow hover:bg-blue-600 hover:text-white transition duration-300"
        data-title="<?php echo esc_attr($title_b); ?>"
        data-description="<?php echo esc_attr($desc_b); ?>"
      >
        <div class="size-12 bg-blue-100 rounded-full text-blue-600 flex justify-center items-center mb-5">
          <span class="dashicons dashicons-heart text-[60px] leading-none"></span>
        </div>
        <h3 class="font-bold text-lg mb-2"><?php echo esc_html($title_b); ?></h3>
        <p class="text-sm"><?php echo esc_html(wp_trim_words($desc_b, 10, '...')); ?></p>
      </div>

      <!-- Specialist C -->
      <?php 
        $title_c = get_field('specialists_title_c') ?: 'Orthopedic Specialist';
        $desc_c  = get_field('consulting_specialists_description_c') ?: 'Specialist in bones, joints, and muscle-related issues.';
      ?>
      <div
        class="specialist-card cursor-pointer bg-white p-6 rounded-2xl border border-gray-200 shadow hover:bg-blue-600 hover:text-white transition duration-300"
        data-title="<?php echo esc_attr($title_c); ?>"
        data-description="<?php echo esc_attr($desc_c); ?>"
      >
        <div class="size-12 bg-blue-100 rounded-full text-blue-600 flex justify-center items-center mb-5">
          <span class="dashicons dashicons-heart text-[60px] leading-none"></span>
        </div>
        <h3 class="font-bold text-lg mb-2"><?php echo esc_html($title_c); ?></h3>
        <p class="text-sm"><?php echo esc_html(wp_trim_words($desc_c, 10, '...')); ?></p>
      </div>

      <!-- Specialist D -->
      <?php 
        $title_d = get_field('specialists_title_d') ?: 'Pediatric Specialist';
        $desc_d  = get_field('consulting_specialists_description_d') ?: 'Focused on the medical needs of infants, children, and adolescents.';
      ?>
      <div
        class="specialist-card cursor-pointer bg-white p-6 rounded-2xl border border-gray-200 shadow hover:bg-blue-600 hover:text-white transition duration-300"
        data-title="<?php echo esc_attr($title_d); ?>"
        data-description="<?php echo esc_attr($desc_d); ?>"
      >
        <div class="size-12 bg-blue-100 rounded-full text-blue-600 flex justify-center items-center mb-5">
          <span class="dashicons dashicons-heart text-[60px] leading-none"></span>
        </div>
        <h3 class="font-bold text-lg mb-2"><?php echo esc_html($title_d); ?></h3>
        <p class="text-sm"><?php echo esc_html(wp_trim_words($desc_d, 10, '...')); ?></p>
      </div>

    </div>
  </div>
</section>


<!-- Why Choose Us -->
<section class="bg-white py-20">
  <div class="max-w-[1200px]  container mx-auto px-4 grid md:grid-cols-2 gap-10 md:gap-30">
    
    <div>
      <img 
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrKXktrjIQIKlRIBBUlgMWXVlHQvr57cmbJw&s" 
        alt="Doctor" 
        class="rounded-xl w-full md:w-200 h-90 shadow-lg object-cover"
      >
    </div>

    
    <div >
      <h2 class="text-4xl font-bold text-gray-900 mb-6">Why You Choose Us?</h2>
      
      <ul class="space-y-4 text-lg  text-gray-700">
        <li class="flex items-start gap-3">
          <span class="text-blue-500 text-xl">&#10003;</span>
          <span>Lorem ipsum dolor sit amet Consectetur adipiscing elit</span>
        </li>
        <li class="flex items-start gap-3">
          <span class="text-blue-500 text-xl">&#10003;</span>
          <span>Lorem ipsum dolor sit amet Consectetur adipiscing elit</span>
        </li>
        <li class="flex items-start gap-3">
          <span class="text-blue-500 text-xl">&#10003;</span>
          <span>Lorem ipsum dolor sit amet Consectetur adipiscing elit</span>
        </li>
        <li class="flex items-start gap-3">
          <span class="text-blue-500 text-xl">&#10003;</span>
          <span>Lorem ipsum dolor sit amet Consectetur adipiscing elit</span>
        </li>
      </ul>

      <a 
        href="#" 
        class="inline-block mt-8 text-blue-600 font-semibold text-lg hover:underline"
      >
        Learn More →
      </a>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-blue-50 py-30 ">
  <div class="max-w-[1200px]  container mx-auto px-4 grid md:grid-cols-2 gap-10 md:gap-30">
    <!-- Heading -->
    <div>
      <h2 class="text-4xl font-bold text-gray-900 mb-6">
        What Our Member’s <span class="text-blue-600">Saying About Us</span>
      </h2>
      <p class="text-gray-600 max-w-xl mx-auto mb-8">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem velit viverra amet faucibus.
      </p>
            <!-- Reviews Count -->
      <div class="flex items-center gap-4">
        <div class="flex -space-x-3">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXZElMNFXv-lQzkLqtLk7l1k090WNrupIZCw&s" alt="Avatar 1" class="w-10 h-10 rounded-full border-2 border-white">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXZElMNFXv-lQzkLqtLk7l1k090WNrupIZCw&s" alt="Avatar 1" class="w-10 h-10 rounded-full border-2 border-white">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXZElMNFXv-lQzkLqtLk7l1k090WNrupIZCw&s" alt="Avatar 1" class="w-10 h-10 rounded-full border-2 border-white">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXZElMNFXv-lQzkLqtLk7l1k090WNrupIZCw&s" alt="Avatar 1" class="w-10 h-10 rounded-full border-2 border-white">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXZElMNFXv-lQzkLqtLk7l1k090WNrupIZCw&s" alt="Avatar 1" class="w-10 h-10 rounded-full border-2 border-white">
        </div> 
        <div class="text-gray-900 font-semibold">100+ Reviews</div>
      </div>
    </div>

    <!-- Reviews Section -->
    <div class="flex  items-center justify-center gap-8">
      <!-- Review Card -->
      <div class="bg-white p-6 rounded-lg border-gray-300 border-[1px] shadow-lg max-w-lg">
        <div class="flex items-center gap-4 mb-4">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXZElMNFXv-lQzkLqtLk7l1k090WNrupIZCw&s" alt="Bob Avatar" class="w-12 h-12 rounded-full">
          <div class="flex justify-between w-full">
            <div>
                <div class="font-bold">BOB</div>
                <div class="text-sm text-gray-500">23/09/03</div>
            </div>
            <div class="text-yellow-500 text-2xl">★★★★★</div>
          </div>
        </div>
        <p class="text-gray-600 italic mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem velit viverra amet faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem velit viverra amet faucibus.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Future of Quality Health -->
<section class="bg-white py-20">
  <div class="max-w-[1200px]  container mx-auto px-4 grid md:grid-cols-2 gap-10 md:gap-30 items-center">
    
    <!-- Left Content -->
    <div class=w-1/3>
      <h2 class="text-4xl font-bold mb-6 leading-snug">
        The Future of <span class="text-blue-600">Quality Health</span>
      </h2>

      <p class="text-gray-700 leading-relaxed space-y-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore obcaecati quaerat sit. Nulla suscipit cumque voluptate, quam, dignissimos tenetur maxime officia dolor, provident est quod totam?
        <br><br>
        Fugiat repellendus ut saepe? Non, rem aperiam ipsum, eos enim officia iure soluta iusto voluptatibus eum eligendi vitae sint commodi?
        <br><br>
        At esse blanditiis consequatur sint saepe nulla sapiente! Delectus tempore reiciendis nemo incidunt repellat?
      </p>

      <a 
        href="#" 
        class="inline-block mt-8 text-blue-600 font-semibold text-lg hover:underline"
      >
        Learn More →
      </a>
    </div>

    <!-- Right Image -->
    <div class="">
      <img 
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBx--3HhkneEMx2LLWoHIyBpV4nn3dkzzH8g&s" 
        alt="Doctor and Patient" 
        class="rounded-xl w-full shadow-lg object-cover"
      >
    </div>

  </div>
</section>

<!-- Newsletter -->
<section class="py-20 bg-white">
  <div class="container max-w-[1200px] mx-auto py-1 px-4">
    <div class=" py-16 text-center relative bg-blue-600 rounded-3xl">
      <h2 class="text-4xl font-bold text-white mb-8 relative z-10">
        Subscribe To Our Newsletter
      </h2>

      <div class="relative max-w-[800px] mx-auto z-10">
        <form class="flex items-center relative">
          <input
            type="email"
            placeholder="Enter your email"
            class="w-full p-4 text-gray-900 bg-white rounded-full pr-16 outline-none"
          >
          <button
            type="submit"
            class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-700 text-white p-2 px-3 rounded-full transition duration-300 hover:scale-110"
          >
            →
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="specialist-modal" class="fixed inset-0 z-50 hidden bg-black/50 flex items-center justify-center p-4">
  <div class="relative w-full max-w-lg bg-white rounded-3xl shadow-2xl overflow-hidden animate-fade-in">

    <!-- Header -->
    <div class="bg-blue-600 px-6 py-5 flex justify-between items-center">
      <h3  class="text-xl font-bold text-white">Specialist Details</h3>
      <button
        class="text-white text-3xl leading-none hover:opacity-80 close-modal-btn"
        aria-label="Close modal"
      >
        &times;
      </button>
    </div>

    <!-- Body -->
    <div class="p-6 bg-white space-y-5">

      <!-- Field: Title -->
      <div>
        <label class="text-sm text-gray-500 block mb-1">Specialty</label>
        <p id="modal-title" class="text-lg font-semibold text-gray-800"></p>
      </div>

      <!-- Field: Description -->
      <div>
        <label class="text-sm text-gray-500 block mb-1">Details</label>
        <p id="modal-description" class="text-lg font-medium text-gray-700"></p>
      </div>

    </div>
  </div>
</div>



<?php get_footer(); ?>
