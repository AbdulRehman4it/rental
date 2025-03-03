<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Flat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../build/css/style.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>


 <!-- testimonial styles -->
 <style>
      .shadow-effect {
		    background: #fff;
		    padding: 16px;
		    border-radius: 20px;
		   
	border:1px solid #ECECEC;
		    box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
		}
		#customers-testimonials .shadow-effect p {
		    line-height: 1.5;
		    font-weight: 300;
		}
		.testimonial-name {
		    margin: -17px auto 0;
		    display: table;
		    width: auto;
		    background: #3190E7;
		
		    border-radius: 12px;
		  
		    color: #fff;
		    box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
		}
		#customers-testimonials .item {
		  
		    
				
		    opacity: .2;
		    -webkit-transform: scale3d(0.8, 0.8, 1);
		    transform: scale3d(0.8, 0.8, 1);
		    -webkit-transition: all 0.3s ease-in-out;
		    -moz-transition: all 0.3s ease-in-out;
		    transition: all 0.3s ease-in-out;
		}
		#customers-testimonials .owl-item.active.center .item {
		    opacity: 1;
		    -webkit-transform: scale3d(1.0, 1.0, 1);
		    transform: scale3d(1.0, 1.0, 1);
		}
		.owl-carousel .owl-item img {
		    transform-style: preserve-3d;
		   
		}

    </style>


    </head>
<body class="bg-[#EEEEEE]">
    <section class="2xl:px-20 xl:px-10 px-5 ">
    <?php  
    require_once './inc/nav.php';
?>
</section>

<section class="lg:pt-32 pb-12 xl:px-20 lg:px-10 px-5 pt-12">
    <div class="">
        <h1 class="flex md:flex-row flex-col justify-center items-center text-center 2xl:text-7xl xl:text-6xl lg:text-5xl text-4xl font-light text-[#3B3B3B] gap-2 md:gap-0" >Find Your Perfect&nbsp;<img src="../build/img/match.png" alt=""> <span class="italic font-bold">&nbsp;Krew Match</span></h1>
        <p class="2xl:text-[34px] xl:text-2xl text-xl font-normal 2xl:leading-[74px] xl:leading-[64px] leading-[45px] pt-5 text-center text-[#838383]">Swipe and Connect with <span class="text-[#3B3B3B]">Like-minded Individuals</span> </p>
      
    </div>
</section>


   <!-- TESTIMONIALS -->
   <section class="testimonials pt-10">
	<div class="pb-20">

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
            <div class="item w-full">
              <div class="shadow-effect flex md:flex-row flex-col gap-4">
                <div class="md:w-1/2 w-full">
                <img  src="img/sliderimg.png" class="object-fill m-0" alt="">
              </div>
                <div class="md:w-1/2 w-full">
                  <h1 class="xl:text-2xl text-lg text-[#3B3B3B] xl:mb-4">Mark William</h1>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-location-dot text-[#FFC300] text-sm"></i> &nbsp;<span class="text-[#3B3B3B]">Location:</span> London, UK - Camden</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-sterling-sign text-[#FFC300] text-sm"></i>&nbsp;<span class="text-[#3B3B3B] xl:mb-4"> Budget:</span> £1,600/month</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-calendar-week text-[#FFC300] text-sm"></i>&nbsp; <span class="text-[#3B3B3B]">Move-in & Lease:</span> 2 August, 2025 / 12-month lease</p>
                 <hr class="my-2 ">
                 <h1 class="xl:text-lg text-sm text-[#3B3B3B] xl:mb-4">Lifestyle Preferences</h1>
                 <p class="xl:space-y-4">
                  <li class="xl:text-sm text-xs text-[#838383]">Prefers a quiet living environment – for someone who values peace and quiet at home.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Enjoys a social household – indicates an affinity for living with sociable housemates.</li>
                   <li class="xl:text-sm text-xs text-[#838383]"> Pet-friendly – open and accommodating to pets.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Works from home – requires a compatible arrangement for remote work setups.</li>
                 </p>
                </div>
            
              </div>
              
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
             <div class="item w-full">
              <div class="shadow-effect flex md:flex-row flex-col gap-4">
                <div class="md:w-1/2 w-full">
                <img  src="img/sliderimg.png" class="object-fill m-0" alt="">
              </div>
                <div class="md:w-1/2 w-full">
                  <h1 class="xl:text-2xl text-lg text-[#3B3B3B] xl:mb-4">Mark William</h1>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-location-dot text-[#FFC300] text-sm"></i> &nbsp;<span class="text-[#3B3B3B]">Location:</span> London, UK - Camden</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-sterling-sign text-[#FFC300] text-sm"></i>&nbsp;<span class="text-[#3B3B3B] xl:mb-4"> Budget:</span> £1,600/month</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-calendar-week text-[#FFC300] text-sm"></i>&nbsp; <span class="text-[#3B3B3B]">Move-in & Lease:</span> 2 August, 2025 / 12-month lease</p>
                 <hr class="my-2 ">
                 <h1 class="xl:text-lg text-sm text-[#3B3B3B] xl:mb-4">Lifestyle Preferences</h1>
                 <p class="xl:space-y-4">
                  <li class="xl:text-sm text-xs text-[#838383]">Prefers a quiet living environment – for someone who values peace and quiet at home.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Enjoys a social household – indicates an affinity for living with sociable housemates.</li>
                   <li class="xl:text-sm text-xs text-[#838383]"> Pet-friendly – open and accommodating to pets.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Works from home – requires a compatible arrangement for remote work setups.</li>
                 </p>
                </div>
            
              </div>
              
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
             <div class="item w-full">
              <div class="shadow-effect flex md:flex-row flex-col gap-4">
                <div class="md:w-1/2 w-full">
                <img  src="img/sliderimg.png" class="object-fill m-0" alt="">
              </div>
                <div class="md:w-1/2 w-full">
                  <h1 class="xl:text-2xl text-lg text-[#3B3B3B] xl:mb-4">Mark William</h1>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-location-dot text-[#FFC300] text-sm"></i> &nbsp;<span class="text-[#3B3B3B]">Location:</span> London, UK - Camden</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-sterling-sign text-[#FFC300] text-sm"></i>&nbsp;<span class="text-[#3B3B3B] xl:mb-4"> Budget:</span> £1,600/month</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-calendar-week text-[#FFC300] text-sm"></i>&nbsp; <span class="text-[#3B3B3B]">Move-in & Lease:</span> 2 August, 2025 / 12-month lease</p>
                 <hr class="my-2 ">
                 <h1 class="xl:text-lg text-sm text-[#3B3B3B] xl:mb-4">Lifestyle Preferences</h1>
                 <p class="xl:space-y-4">
                  <li class="xl:text-sm text-xs text-[#838383]">Prefers a quiet living environment – for someone who values peace and quiet at home.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Enjoys a social household – indicates an affinity for living with sociable housemates.</li>
                   <li class="xl:text-sm text-xs text-[#838383]"> Pet-friendly – open and accommodating to pets.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Works from home – requires a compatible arrangement for remote work setups.</li>
                 </p>
                </div>
            
              </div>
              
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
             <div class="item w-full">
              <div class="shadow-effect flex md:flex-row flex-col gap-4">
                <div class="md:w-1/2 w-full">
                <img  src="img/sliderimg.png" class="object-fill m-0" alt="">
              </div>
                <div class="md:w-1/2 w-full">
                  <h1 class="xl:text-2xl text-lg text-[#3B3B3B] xl:mb-4">Mark William</h1>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-location-dot text-[#FFC300] text-sm"></i> &nbsp;<span class="text-[#3B3B3B]">Location:</span> London, UK - Camden</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-sterling-sign text-[#FFC300] text-sm"></i>&nbsp;<span class="text-[#3B3B3B] xl:mb-4"> Budget:</span> £1,600/month</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-calendar-week text-[#FFC300] text-sm"></i>&nbsp; <span class="text-[#3B3B3B]">Move-in & Lease:</span> 2 August, 2025 / 12-month lease</p>
                 <hr class="my-2 ">
                 <h1 class="xl:text-lg text-sm text-[#3B3B3B] xl:mb-4">Lifestyle Preferences</h1>
                 <p class="xl:space-y-4">
                  <li class="xl:text-sm text-xs text-[#838383]">Prefers a quiet living environment – for someone who values peace and quiet at home.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Enjoys a social household – indicates an affinity for living with sociable housemates.</li>
                   <li class="xl:text-sm text-xs text-[#838383]"> Pet-friendly – open and accommodating to pets.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Works from home – requires a compatible arrangement for remote work setups.</li>
                 </p>
                </div>
            
              </div>
              
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
             <div class="item w-full">
              <div class="shadow-effect flex md:flex-row flex-col gap-4">
                <div class="md:w-1/2 w-full">
                <img  src="img/sliderimg.png" class="object-fill m-0" alt="">
              </div>
                <div class="md:w-1/2 w-full">
                  <h1 class="xl:text-2xl text-lg text-[#3B3B3B] xl:mb-4">Mark William</h1>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-location-dot text-[#FFC300] text-sm"></i> &nbsp;<span class="text-[#3B3B3B]">Location:</span> London, UK - Camden</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-sterling-sign text-[#FFC300] text-sm"></i>&nbsp;<span class="text-[#3B3B3B] xl:mb-4"> Budget:</span> £1,600/month</p>
                  <p class="text-[#838383] xl:text-lg text-sm xl:mb-4"><i class="fa-solid fa-calendar-week text-[#FFC300] text-sm"></i>&nbsp; <span class="text-[#3B3B3B]">Move-in & Lease:</span> 2 August, 2025 / 12-month lease</p>
                 <hr class="my-2 ">
                 <h1 class="xl:text-lg text-sm text-[#3B3B3B] xl:mb-4">Lifestyle Preferences</h1>
                 <p class="xl:space-y-4">
                  <li class="xl:text-sm text-xs text-[#838383]">Prefers a quiet living environment – for someone who values peace and quiet at home.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Enjoys a social household – indicates an affinity for living with sociable housemates.</li>
                   <li class="xl:text-sm text-xs text-[#838383]"> Pet-friendly – open and accommodating to pets.</li>
                    <li class="xl:text-sm text-xs text-[#838383]">Works from home – requires a compatible arrangement for remote work setups.</li>
                 </p>
                </div>
            
              </div>
              
            </div>
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->


<?php  
    require_once './inc/footer.php';
?>

    <!-- slider testimonial  -->

<script>
      jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              1024: {
		                items: 2
		              },
		             
                  1770: {
		                items: 3
		              }
		            }
		        });
        	});
    </script>


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
    <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
</body>
</html>