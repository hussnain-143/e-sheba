<?php
/**
 * Template Name: Medical Landing Page
 * Template Post Type: page
 */
get_header();
?>

<!-- Hero Section -->
<section class="bg-blue-50 text-gray-900 pt-24 pb-12">
  <div class="container mx-auto px-4 text-center ">
    <h1 class="text-4xl md:text-5xl font-bold">Find & Search Your <span class="text-blue-600">Favourite</span> Doctor</h1>
    <p class="mt-4 text-gray-600 max-w-xl mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem velit viverra amet faucibus.</p>
    <div class="mt-6 flex justify-center flex-wrap gap-4">
      <select class="p-3 rounded border text-gray-700">
        <option>Doctor's Name</option>
        <option>Dr. A</option>
        <option>Dr. B</option>
      </select>
      <select class="p-3 rounded border text-gray-700">
        <option>Location</option>
        <option>Lahore</option>
        <option>Islamabad</option>
      </select>
      <button class="bg-blue-600 text-white p-3 px-5 rounded">Search</button>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="bg-white py-8">
  <div class="container mx-auto grid grid-cols-3 gap-4 text-center">
    <div>
      <h2 class="text-2xl font-bold text-blue-600">24/7</h2>
      <p class="text-gray-600">Online Support</p>
    </div>
    <div>
      <h2 class="text-2xl font-bold text-blue-600">100+</h2>
      <p class="text-gray-600">Doctors</p>
    </div>
    <div>
      <h2 class="text-2xl font-bold text-blue-600">1M+</h2>
      <p class="text-gray-600">Active Patients</p>
    </div>
  </div>
</section>

<!-- Consulting Specialists -->
<section class="bg-blue-50 py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Our Consulting Specialists</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      <?php for ($i = 0; $i < 4; $i++) : ?>
      <div onclick="openModal(<?php echo $i; ?>)" class="cursor-pointer bg-white p-4 rounded shadow hover:shadow-lg transition">
        <div class="text-blue-600 text-3xl mb-2">&#128137;</div>
        <h3 class="font-bold mb-1">Heart Lungs</h3>
        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur.</p>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="bg-white py-12">
  <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8">
    <img src="https://via.placeholder.com/500x300" alt="Doctor" class="rounded">
    <div>
      <h2 class="text-3xl font-bold mb-4">Why You Choose Us?</h2>
      <ul class="space-y-2 text-gray-700">
        <li>&#10003; Lorem ipsum dolor sit amet</li>
        <li>&#10003; Consectetur adipiscing elit</li>
        <li>&#10003; Semper fermentum</li>
        <li>&#10003; Nulla nec elit</li>
      </ul>
      <a href="#" class="inline-block mt-4 text-blue-600 font-semibold">Learn More →</a>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-blue-50 py-12">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold mb-6">What Our Member’s Saying About Us</h2>
    <div class="bg-white p-6 rounded shadow inline-block max-w-lg">
      <p class="italic">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem velit viverra amet faucibus.”</p>
      <div class="mt-4 font-bold">Jane Cooper</div>
      <div class="text-yellow-500 text-lg">★★★★★</div>
    </div>
  </div>
</section>

<!-- Future of Quality Health -->
<section class="bg-white py-12">
  <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
    <div>
      <h2 class="text-3xl font-bold mb-4">The Future of <span class="text-blue-600">Quality Health</span></h2>
      <p class="text-gray-700 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p class="text-gray-700">Nec risus feugiat lectus risus sed ullamcorper. Auctor semper fermentum.</p>
    </div>
    <img src="https://via.placeholder.com/500x300" alt="Doctor and Patient" class="rounded">
  </div>
</section>

<!-- Newsletter -->
<section class="bg-blue-600 text-white py-12">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-2xl font-bold mb-4">Subscribe To Our Newsletter</h2>
    <form class="max-w-xl mx-auto flex">
      <input type="email" placeholder="Enter your email" class="w-full p-3 rounded-l text-gray-900">
      <button type="submit" class="bg-white text-blue-600 px-6 rounded-r">→</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-blue-900 text-white py-8">
  <div class="container mx-auto px-4 grid md:grid-cols-3 gap-6">
    <div>
      <h3 class="font-bold mb-2">E-sheba</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div>
      <h3 class="font-bold mb-2">Useful Links</h3>
      <ul>
        <li><a href="#" class="hover:underline">About Us</a></li>
        <li><a href="#" class="hover:underline">Privacy Policy</a></li>
        <li><a href="#" class="hover:underline">Our Mission</a></li>
        <li><a href="#" class="hover:underline">Our Team</a></li>
      </ul>
    </div>
    <div>
      <h3 class="font-bold mb-2">Address</h3>
      <img src="https://via.placeholder.com/150x100" alt="Map" class="rounded">
    </div>
  </div>
  <div class="text-center mt-6 text-sm">© 2022 All Rights Reserved</div>
</footer>

<!-- Modal Placeholder -->
<div id="specialist-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded max-w-md w-full relative">
    <button onclick="closeModal()" class="absolute top-2 right-2">&times;</button>
    <h2 class="text-xl font-bold mb-2">Specialist Info</h2>
    <p>This is some extra detail about the specialist.</p>
  </div>
</div>

<script>
function openModal(index) {
  document.getElementById('specialist-modal').classList.remove('hidden');
}
function closeModal() {
  document.getElementById('specialist-modal').classList.add('hidden');
}
</script>

<?php get_footer(); ?>
