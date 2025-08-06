<?php
/**
 * Template Name: Medical Landing Page
 * Template Post Type: page
 */
get_header();
?>

<!-- Hero Section -->
<section class="relative bg-blue-50 text-gray-900 pt-24 pb-0 overflow-hidden">

  <!-- Background Circle -->
  <div class="size-250 bg-blue-200 right-0 top-[5rem] z-0 rounded-full absolute "></div>

  <!-- Content Container -->
  <div class="max-w-[1200px] mb-10 lg:mb-0 relative z-40 container mx-auto px-4 flex flex-col-reverse lg:flex-row items-center gap-10 lg:gap-30">

    <!-- Left Content -->
    <div class=" text-center lg:text-left flex-1">
      <h1 class="text-4xl md:text-5xl font-bold leading-tight">
        Find & Search Your <span class="text-blue-600 underline underline-offset-4">Favourite</span> Doctor
      </h1>
      <p class="mt-4 text-gray-600 ">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem velit viverra amet faucibus.
      </p>

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
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFcjG4Fx_zu9v1VbDT7zqCGbgvhgNZzR54GQ&s" alt="Doctor Illustration" class="w-[90%] max-w-sm lg:max-w-md relative z-10 object-contain">
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
<section class="py-20 bg-gray-50">
  <div class="max-w-[1200px] container mx-auto px-4">
    <h2 class="text-4xl font-bold mb-12">Our Consulting Specialists</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      <?php for ($i = 0; $i < 4; $i++) : ?>
        <div 
          onclick="openModal(<?php echo $i; ?>)" 
          class="cursor-pointer bg-white p-6 rounded-2xl border border-gray-200 shadow hover:bg-blue-600 hover:text-white transition duration-300"
        >
          <div class="size-12 bg-blue-100 rounded-full text-blue-600 flex justify-center items-center mb-5">
            <span class="dashicons dashicons-heart text-[60px] leading-none"></span>
          </div>
          <h3 class="font-bold text-lg mb-2">Heart Lungs</h3>
          <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur.
          </p>
        </div>
      <?php endfor; ?>
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

<!-- Modal Placeholder -->
<div id="specialist-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded max-w-md w-full relative">
    <button onclick="closeModal()" class="absolute top-2 right-2">&times;</button>
    <h2 class="text-xl font-bold mb-2">Specialist Info</h2>
    <p>This is some extra detail about the specialist.</p>
  </div>
</div>

<?php get_footer(); ?>
