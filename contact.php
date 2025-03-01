<?php
$webtitle = 'Contact';
require_once './inc/header.php';
?>
<body class="bg-[#EEEEEE]">

        <!-- navbar section  -->
    <section class="bg-cover bg-center 2xl:px-20 xl:px-10 px-5 xl:h-[800px] h-[600px]" style="background-image: url(./img/BG.png);">
    <?php  
    require_once './inc/nav.php';
?>
        <!-- Hero Section -->
        <div class="xl:pt-40 pt-20 text-center">
            <h1 class="2xl:text-[100px] xl:text-7xl text-4xl text-white font-light">Need Assistance? We're Here <span class="italic font-bold">for You!</span></h1>
            <p class="2xl:text-[26px] xl:text-xl text-lg pt-2 xl:pt-5 text-white 2xl:leading-8">Got questions about finding a home or listing your property? We're just a message away! Let’s chat, and we’ll help you out quickly </p>
        
        </div>
    </section>

    <!-- contact form  -->

    <section class="2xl:px-52 xl:px-24 lg:px-12 px-5 -mt-24">
        <div class="bg-[#F5F5F5] flex lg:flex-row flex-col justify-between gap-12 p-8 rounded-[20px] shadow-xl">
            <div class="lg:w-[33%] w-full rounded-[20px] bg-[#EEEEEE] p-7">
                <h1 class="xl:text-[22px] text-xl text-[#3B3B3B] font-semibold">Contact Information</h1>
                <p class="xl:text-base text-sm leading-7 font-light text-[#838383] pt-4">Reach out to us through any of the following means, and  we’ll ensure you receive the help you need promptly.</p>
                <p class="xl:text-lg text-base text-[#838383] leading-5 pt-4"><i class="fa-solid fa-phone  text-[#FFC300]"></i> &nbsp;1-800-000-0000</p>
                <p class="xl:text-lg text-base text-[#838383] leading-5 pt-2"><i class="fa-solid fa-envelope text-[#FFC300]"></i> &nbsp;support@Kosykeys.com</p>
                <p class="xl:text-lg text-base text-[#838383] leading-5 pt-2"><i class="fa-solid fa-location-dot text-[#FFC300]"></i>  &nbsp;30 St Marylebone, London NW1 6XE</p>
                <p class="xl:text-lg text-base text-[#838383] leading-5 pt-2"><i class="fa-solid fa-clock text-[#FFC300]"></i> &nbsp;10 AM - 6 PM (Mon-Fri)</p>
                <h1 class="text-[#3B3B3B] text-base font-semibold pt-10">Follow Us on Social Media</h1>
                <div class="text-2xl md:space-x-6 space-x-3 pt-4">
                    <i class="fa-brands fa-square-instagram text-[#FFC300]"></i>
                    <i class="fa-brands fa-linkedin text-[#FFC300]"></i>
                    <i class="fa-brands fa-square-facebook text-[#FFC300]"></i>
                    <i class="fa-brands fa-twitter text-[#FFC300]"></i>
                </div>
            </div>
            
            <div class="lg:w-[66%] w-full">
                <div>
                    <h1 class="text-[#3B3B3B] text-[26px] font-semibold">Contact or Inquiry Form</h1>
                    <p class="text-[#838383] xl:text-base text-sm font-normal xl:leading-8 leading-7">We're here to help you find the perfect home! Use the form below to get in touch with us for any questions or inquiries you may have regarding this property.</p>
                </div>
                <form action="" class="flex flex-col space-y-3 pt-5">
                    <div class="flex gap-4">
                        <input type="text" class="w-1/2 bg-[#E5E5E5] rounded-[20px] border border-[#E5E5E5] py-5 px-5" id="" name="name" placeholder="Your Name">
                        <input type="email" class="w-1/2 bg-[#E5E5E5] rounded-[20px] border border-[#E5E5E5] py-5 px-5" id="" name="name" placeholder="Email Address">
                    </div>
                    
                    <input type="text" class="bg-[#E5E5E5] rounded-[20px] border border-[#E5E5E5] py-5 px-5" id="" name="name" placeholder="Subject">
                    <textarea name="" class="bg-[#E5E5E5] rounded-[20px] border border-[#E5E5E5] py-5 px-5" id="" rows="5" placeholder="Your Message Here"></textarea>
                <div class="pt-10 flex md:flex-row flex-col items-start gap-8">
                    <button class="md:w-1/3 bg-[#FFC300] text-white px-10 py-3 rounded-[20px]">Let's Talk!</button>
                    <p class="text-[#838383] 2xl:text-base text-sm font-light pt-2 md:w-2/3">We typically respond within <span class="text-[#3B3B3B]">24 hours.</span> For urgent inquiries, call us directly.</p>
                </div>
                </div>
        </div>
    </section>

    <!-- map  -->
    <div class="xl:pt-36 pt-16 xl:pb-24 pb-10">
       
        <div style="width: 100% "><iframe width="100%"  height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">dog tracker</a></iframe></div>
        </div>


        <!-- faqs  -->

<section class="px-5">
    <div class="text-center">
        <h1 class="text-[#3B3B3B] xl:text-[54px] text-4xl font-semibold">Frequently Asked Questions</h1>
        <p class="text-[#838383] xl:text-lg text-base leading-8 xl:leading-8 2xl:pt-6 pt-4">We understand that navigating the property market can raise many questions. To help streamline your experience, we've <br class="lg:block hidden"> compiled answers to the most common questions we receive from our community.</p>
    </div>
   
    <div class="accordion py-20 xl:px-32 px-5 lgpx-10">
        <div class="accordion__item">
          <div class="accordion__header 2xl:text-2xl text-xl text-[#838383]" data-toggle="#faq1">How do I schedule a property tour?</div>
          <div class="accordion__content" id="faq1">
            <p class="2xl:text-lg text-base 2xl:leading-10 leading-8 text-[#838383] py-4">Once you've found a property you love, click on the "Apply Now" button, which will guide you through our online application process. Be prepared to provide personal information, rental history, and references.</p>
          </div>
        </div>

        <div class="accordion__item">
          <div class="accordion__header 2xl:text-2xl text-lg text-[#838383]" data-toggle="#faq2">What should I do if I want to apply for a rental property?</div>
          <div class="accordion__content" id="faq2">
            <p class="2xl:text-lg text-base 2xl:leading-10 leading-8 text-[#838383] py-4">We’re seeking dedicated partners who are motivated to achieve growth and success. Explore the essential criteria for joining our affiliate program and discover the extensive resources, tools, and support we provide to help you thrive. With our guidance and your ambition, we aim to build a partnership that drives mutual success and long-term growth.</p>
          
          </div>
        </div>

        <div class="accordion__item">
          <div class="accordion__header 2xl:text-2xl text-lg text-[#838383]" data-toggle="#faq3">How can I list my property on your platform?</div>
          <div class="accordion__content" id="faq3">
            <p class="2xl:text-lg text-base 2xl:leading-10 leading-8 text-[#838383] py-4">We’re seeking dedicated partners who are motivated to achieve growth and success. Explore the essential criteria for joining our affiliate program and discover the extensive resources, tools, and support we provide to help you thrive. With our guidance and your ambition, we aim to build a partnership that drives mutual success and long-term growth.</p>
            
          </div>
        </div>

        <div class="accordion__item">
          <div class="accordion__header 2xl:text-2xl text-lg text-[#838383]" data-toggle="#faq4">What security features are in place for online transactions?</div>
          <div class="accordion__content" id="faq4">
            <p class="2xl:text-lg text-base 2xl:leading-10 leading-8 text-[#838383] py-4">We’re seeking dedicated partners who are motivated to achieve growth and success. Explore the essential criteria for joining our affiliate program and discover the extensive resources, tools, and support we provide to help you thrive. With our guidance and your ambition, we aim to build a partnership that drives mutual success and long-term growth.</p>
            
          </div>
        </div>
        <div class="accordion__item">
            <div class="accordion__header 2xl:text-2xl text-lg text-[#838383]" data-toggle="#faq5">Can I save my favorite properties for later review?</div>
            <div class="accordion__content" id="faq5">
              <p class="2xl:text-lg text-base 2xl:leading-10 leading-8 text-[#838383] py-4">We’re seeking dedicated partners who are motivated to achieve growth and success. Explore the essential criteria for joining our affiliate program and discover the extensive resources, tools, and support we provide to help you thrive. With our guidance and your ambition, we aim to build a partnership that drives mutual success and long-term growth.</p>
              
            </div>
          </div>

      </div>

</section>

<!-- footer  -->
<footer class="bg-[#F5F5F5] xl:px-20 lg:px-10 px-5">
    <div class="grid items-center lg:grid-cols-3 md:grid-cols-3 grid-cols-1 justify-center text-center md:text-start 2xl:gap-60 xl:gap-40 gap-10 py-14">
        <div>
            <div>
                <img src="../build/img/footerlogo.png" alt="">
            </div>
            <p class="xl:text-xl text-sm text-[#838383] pt-5">Your Journey to the Perfect Home Starts Today.</p>
        </div>
        <div>
            <h1 class="xl:text-[22px] text-lg font-semibold">Contact Information</h1>
            <p class="xl:text-lg text-sm text-[#838383] pt-5"><i class="fa-solid fa-envelope text-[#FFC300]"></i> &nbsp;support@Flatmatch.com</p>
            <p class="xl:text-lg text-sm text-[#838383] pt-5"><i class="fa-solid fa-phone  text-[#FFC300]"></i> &nbsp;1-800-000-0000</p>
            <hr class="text-black h-2 my-6">
            <div class="text-2xl md:space-x-6 space-x-3">
                <i class="fa-brands fa-square-instagram text-[#FFC300]"></i>
                <i class="fa-brands fa-linkedin text-[#FFC300]"></i>
                <i class="fa-brands fa-square-facebook text-[#FFC300]"></i>
                <i class="fa-brands fa-twitter text-[#FFC300]"></i>
            </div>
        </div>
        
        <div>
            <h1 class="xl:text-[22px] text-lg font-semibold ">Newsletter</h1>
            <p class="xl:text-base text-sm text-[#838383] pt-5">Sign up today and embark on a journey toward a better living experience </p>

           
<div class="relative md:w-auto w-full bg-[#EEEEEE] rounded-2xl shadow-md p-1.5 transition-all duration-150 ease-in-out hover:scale-105 hover:shadow-lg mt-4">
  
<input type="text" class="w-full pl-2 xl:py-3 py-1 text-base text-gray-700 bg-transparent rounded-lg focus:outline-none" placeholder="Enter Your Enroll Here" />
  <button
    class="absolute right-1 top-1 bottom-1 xl:px-6 lg:px-3 px-2 bg-[#FFC300] text-white font-medium rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FFC300] md:text-sm lg:text-base xl:text-lg text-lg:"> Subscribe
  </button>
</div>

            
        </div>
    </div>
    
</footer>

<div class="bg-[#3B3B3B] py-2 flex justify-between xl:px-20 lg:px-10 px-5">
    <div>
        <p class="text-[#F5F5F5] xl:text-lg text-sm">© 2025 FaltMatch</p>
    </div>
    <div class="flex justify-between gap-6">
        <p class="text-[#F5F5F5] xl:text-lg text-sm hover:underline ">Privacy Policy</p>
        <p class="text-[#F5F5F5] xl:text-lg text-sm hover:underline">Term of Services</p>
    </div>
</div>





      <!-- JavaScript for Menu Toggle -->
      <script>
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
    
        menuBtn.addEventListener('click', () => {
            menu.classList.remove('translate-y-[-100%]');
            menu.classList.add('translate-y-0');
            menuIcon.classList.replace('fa-bars', 'fa-xmark'); // Change to close icon
        });
    
        closeBtn.addEventListener('click', () => {
            menu.classList.remove('translate-y-0');
            menu.classList.add('translate-y-[-100%]');
            menuIcon.classList.replace('fa-xmark', 'fa-bars'); // Change back to menu icon
        });
    
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!menu.contains(e.target) && !menuBtn.contains(e.target)) {
                menu.classList.add('translate-y-[-100%]');
                menuIcon.classList.replace('fa-xmark', 'fa-bars');
            }
        });
    </script>


<!-- FAQs -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
const togglers = document.querySelectorAll('[data-toggle]');

togglers.forEach((btn) => {
btn.addEventListener('click', (e) => {
 const selector = e.currentTarget.dataset.toggle
 const block = document.querySelector(`${selector}`);
if (e.currentTarget.classList.contains('active')) {
  block.style.maxHeight = '';
} else {
  block.style.maxHeight = block.scrollHeight + 'px';
}
  
 e.currentTarget.classList.toggle('active')
})
})
})
  </script>
    

<script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
    
</body>
</html>