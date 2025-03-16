
<?php
$webtitle = 'Search|Property';
require_once './inc/header.php';
?>
<body class="bg-[#EEEEEE]">

  <section class="2xl:px-20 xl:px-10 px-5">

  <?php  
    require_once './inc/nav.php';
?>
</section>


<section class="lg:pt-32 xl:px-20 lg:px-10 px-5 pt-12">
  <div class="">
      <h1 class="flex md:flex-row flex-col lg:justify-start justify-center items-center text-center 2xl:text-8xl xl:text-7xl lg:text-5xl text-4xl font-light text-[#3B3B3B] gap-2 md:gap-0" >Your Property <span class="italic font-bold text-[#FFC300]">&nbsp;Matches</span></h1>
      <p class="text-[#838383] xl:text-2xl text-lg lg:text-start text-center mt-4">Browse and explore the properties that fit your criteria. <span class="font-semibold text-[#3B3B3B]">Perfect matches</span> are just a click away.</p>
  </div>
</section>
    <!-- hero section -->
    <section class="pt-10">
        <div class="lg:px-20 px-5">
        
             <div class=" bg-[#F5F5F5] shadow-md rounded-[20px] p-8  mt-4">
              <div>
                  <h1 class="text-[#3B3B3B] 2xl:text-[26px] text-xl font-semibold">Find Your Next Home</h1>
              </div>
          <div class="flex flex-col lg:flex-row gap-4  pt-5">
                          
              <select class="flex-1 p-2 border rounded-[20px] bg-[#EEEEEE] text-[#838383]">
                  <option><i class="fa-solid fa-location-dot"></i> Location</option>
              </select>
              <select class="flex-1 p-1 border rounded-[20px] bg-[#EEEEEE] text-[#838383]">
                  <option><i class="fa-solid fa-dollar-sign"></i> Budget</option>
              </select>
              <select class="flex-1 p-1 border rounded-[20px] bg-[#EEEEEE] text-[#867575]">
                  <option><i class="fa-solid fa-house text-[#838383]"></i> Property Type</option>
              </select>
             
              <button class="bg-[#FFC300] text-white px-32 py-3 rounded-[20px]">Search</button></div>
          </div>
          
            
            <div class="mt-6">
                <h3 class="text-[#838383] font-semibold 2xl:text-2xl text-xl">Current Search</h3>
                <div class="flex flex-wrap gap-5 mt-4">
                    <span class="bg-[#F5F5F5] text-[#3B3B3B] px-3 py-1 rounded-md text-sm"><span class="text-[#FFC300]">Location:</span> San Francisco, CA <button class="ml-2 text-[#FF0000]">&times;</button></span>
                    <span class="bg-[#F5F5F5] text-[#3B3B3B] px-3 py-1 rounded-md text-sm"><span class="text-[#FFC300]">Budget: :</span> $1,000 - $1,500 per month <button class="ml-2 text-[#FF0000]">&times;</button></span>
                    <span class="bg-[#F5F5F5] text-[#3B3B3B] px-3 py-1 rounded-md text-sm"><span class="text-[#FFC300]">Property Type:</span> Apartment <button class="ml-2 text-[#FF0000]">&times;</button></span>
                    <span class="bg-[#F5F5F5] text-[#3B3B3B] px-3 py-1 rounded-md text-sm"><span class="text-[#FFC300]">Search Radius:</span> Within 5 miles <button class="ml-2 text-[#FF0000]">&times;</button></span>
                    <span class="bg-[#F5F5F5] text-[#3B3B3B] px-3 py-1 rounded-md text-sm"><span class="text-[#FFC300]">Amenities:</span> Pet Friendly, Parking Available, In-unit Laundry <button class="ml-2 text-[#FF0000]">&times;</button></span>
                </div>
            </div>
            <hr class="mt-6 border">
        </div>
    </section>

<!-- cardsss -->
<section class="pt-16 2xl:px-20 lg:px-10 px-5">
  <div>
      <!-- Section Header -->
      

      <!-- Property Cards -->
      <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-4 2xl:gap-10 gap-5">
          <!-- Property 1 -->
          <div class="bg-[#F5F5F5] text-black rounded-[30px] shadow-lg overflow-hidden xl:p-5 p-3">
              <div class="relative">
                  <img src="./img/properties1.png" alt="Property 1" class="w-full h-52 object-cover rounded-[25px]">
                  <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                      <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                      <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                      <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                  </div>
              </div>
              <div class="pt-5">
                  <h3 class="font-semibold xl:text-xl text-lg text-[#3B3B3B]">Charming 1-Bedroom Loft</h3>
                  <p class="text-[#838383] xl:text-base text-sm mt-2">
                    <strong class="text-[#3B3B3B]">Key Features:</strong>1 Bed, 1 Bath, Exposed Brick, Rooftop Access
                  </p>
                  <p class="text-[#838383] xl:text-base text-sm mt-3">
                      <i class="fa-solid fa-location-dot"></i> Brooklyn, NY - Williamsburg
                  </p>
                  <p class="font-semibold 2xl:text-4xl xl:text-2xl text-[#3B3B3B] text-lg xl:mt-10 mt-5">&#163;950/month</p>
                  <div class="mt-6 gap-4 flex items-center">
                      <button class="flex justify-center w-full items-center gap-2 text-[#FFC300] border border-[#FFC300] px-4 py-2 rounded-[10px]">
                          <i class="fa-solid fa-eye"></i> Explore This Home
                      </button>
                      <button class="text-[#FFC300] border border-[#FFC300] p-2 rounded-[8px]"><i class="fa-solid fa-bookmark text-xl"></i></button>
                  </div>
              </div>
          </div>

          <!-- Property 2 -->
          <div class="bg-[#F5F5F5] text-black rounded-[30px] shadow-lg overflow-hidden xl:p-5 p-3">
              <div class="relative">
                  <img src="./img/properties2.png" alt="Property 2" class="w-full h-52 object-cover rounded-[25px]">
                  <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                      <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                      <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                      <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                  </div>
              </div>
              <div class="pt-5">
                  <h3 class="font-semibold xl:text-xl text-lg text-[#3B3B3B]">Modern 3-Bedroom Condo</h3>
                  <p class="text-[#838383] xl:text-base text-sm mt-2">
                    <strong class="text-[#3B3B3B]">Key Features:</strong>3 Beds, 2 Baths, Pool, Gym, Secure Parking
                  </p>
                  <p class="text-[#838383] xl:text-base text-sm mt-3">
                      <i class="fa-solid fa-location-dot"></i> San Francisco, CA - Mission Bay
                  </p>
                  <p class="font-semibold 2xl:text-4xl xl:text-2xl text-[#3B3B3B] text-lg xl:mt-10 mt-5">&#163;2,500/month</p>
                  <div class="mt-6 gap-4 flex items-center">
                      <button class="flex justify-center w-full items-center gap-2 text-[#FFC300] border border-[#FFC300] px-4 py-2 rounded-[10px]">
                          <i class="fa-solid fa-eye"></i> Explore This Home
                      </button>
                      <button class="text-[#FFC300] border border-[#FFC300] p-2 rounded-[8px]"><i class="fa-solid fa-bookmark text-xl"></i></button>
                  </div>
              </div>
          </div>

          <!-- Property 3 -->
          <div class="bg-[#F5F5F5] text-black rounded-[30px] shadow-lg overflow-hidden xl:p-5 p-3">
              <div class="relative">
                  <img src="./img/properties3.png" alt="Property 3" class="w-full h-52 object-cover rounded-[25px]">
                  <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                      <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                      <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                      <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                  </div>
              </div>
              <div class="pt-5">
                  <h3 class="font-semibold xl:text-xl text-lg text-[#3B3B3B]">Spacious 4-Bedroom House</h3>
                  <p class="text-[#838383] xl:text-base text-sm mt-2">
                    <strong class="text-[#3B3B3B]">Key Features:</strong> 4 Beds, 3 Baths, Pet Friendly, Backyard
                  </p>
                  <p class="text-[#838383] xl:text-base text-sm mt-3">
                      <i class="fa-solid fa-location-dot"></i> Austin, TX - Barton Hills
                  </p>
                  <p class="font-semibold 2xl:text-4xl xl:text-2xl text-[#3B3B3B] text-lg xl:mt-10 mt-5">&#163;3,300/month</p>
                  <div class="mt-6 gap-4 flex items-center">
                      <button class="flex justify-center w-full items-center gap-2 text-[#FFC300] border border-[#FFC300] px-4 py-2 rounded-[10px]">
                          <i class="fa-solid fa-eye"></i> Explore This Home
                      </button>
                      <button class="text-[#FFC300] border border-[#FFC300] p-2 rounded-[8px]"><i class="fa-solid fa-bookmark text-xl"></i></button>
                  </div>
              </div>
          </div>

          <!-- Property 4 -->
          <div class="bg-[#F5F5F5] text-black rounded-[30px] shadow-lg overflow-hidden xl:p-5 p-3">
              <div class="relative">
                  <img src="./img/properties4.png" alt="Property 4" class="w-full h-52 object-cover rounded-[25px]">
                  <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                      <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                      <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                      <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                  </div>
              </div>
              <div class="pt-5">
                  <h3 class="font-semibold xl:text-xl text-lg text-[#3B3B3B]">Elegant Studio Apartment</h3>
                  <p class="text-[#838383] xl:text-base text-sm mt-2">
                      <strong class="text-[#3B3B3B]">Key Features:</strong> Studio, 1 Bath, In-Unit Laundry, Wi-Fi Included
                  </p>
                  <p class="text-[#838383] xl:text-base text-sm mt-3">
                      <i class="fa-solid fa-location-dot"></i> Chicago, IL - Lincoln Park
                  </p>
                  <p class="font-semibold 2xl:text-4xl xl:text-2xl text-[#3B3B3B] text-lg xl:mt-10 mt-5">	&#163;1,100/month</p>
                  <div class="mt-6 gap-4 flex items-center">
                      <button class="flex justify-center w-full items-center gap-2 text-[#FFC300] border border-[#FFC300] px-4 py-2 rounded-[10px]">
                          <i class="fa-solid fa-eye"></i> Explore This Home
                      </button>
                      <button class="text-[#FFC300] border border-[#FFC300] p-2 rounded-[8px]"><i class="fa-solid fa-bookmark text-xl"></i></button>
                  </div>
              </div>
          </div>
      </div>
      <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-4 2xl:gap-10 gap-5">
        <!-- Property 5 -->
        <div class="bg-[#F5F5F5] text-black rounded-[30px] shadow-lg overflow-hidden xl:p-5 p-3">
            <div class="relative">
                <img src="./image/card5.png" alt="Property 1" class="w-full h-52 object-cover rounded-[25px]">
                <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                </div>
            </div>
            <div class="pt-5">
                <h3 class="font-semibold xl:text-xl text-lg text-[#3B3B3B]">Cozy 2-Bedroom Duplex</h3>
                <p class="text-[#838383] xl:text-base text-sm mt-2">
                    <strong class="text-[#3B3B3B]">Key Features:</strong> 2 Beds, 1.5 Baths, Hardwood Floors, Balcony
                </p>
                <p class="text-[#838383] xl:text-base text-sm mt-3">
                    <i class="fa-solid fa-location-dot"></i> <SPAN class="text-[#3B3B3B]">Location:</SPAN> Seattle, WA - Capitol Hill
                </p>
                <p class="font-semibold 2xl:text-4xl xl:text-2xl text-[#3B3B3B] text-lg xl:mt-10 mt-5">&#163;950/month</p>
                <div class="mt-6 gap-4 flex items-center">
                    <button class="flex justify-center w-full items-center gap-2 text-[#FFC300] border border-[#FFC300] px-4 py-2 rounded-[10px]">
                        <i class="fa-solid fa-eye"></i> Explore This Home
                    </button>
                    <button class="text-[#FFC300] border border-[#FFC300] p-2 rounded-[8px]"><i class="fa-solid fa-bookmark text-xl"></i></button>
                </div>
            </div>
        </div>

        <!-- Property 6 -->
        <div class="bg-[#F5F5F5] text-black rounded-[30px] shadow-lg overflow-hidden xl:p-5 p-3">
            <div class="relative">
                <img src="./image/card6.png" alt="Property 2" class="w-full h-52 object-cover rounded-[25px]">
                <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                </div>
            </div>
            <div class="pt-5">
                <h3 class="font-semibold xl:text-xl text-lg text-[#3B3B3B]">Luxury 2-Bedroom Apartment</h3>
                <p class="text-[#838383] xl:text-base text-sm mt-2">
                    <strong class="text-[#3B3B3B]">Key Features:</strong> 2 Beds, 2 Baths, Beachfront, Pool Access
                </p>
                <p class="text-[#838383] xl:text-base text-sm mt-3">
                    <i class="fa-solid fa-location-dot"></i> <SPAN class="text-[#3B3B3B]">Location:</SPAN> Miami, FL - South Beach
                </p>
                <p class="font-semibold 2xl:text-4xl xl:text-2xl text-[#3B3B3B] text-lg xl:mt-10 mt-5">&#163;3,300/month</p>
                <div class="mt-6 gap-4 flex items-center">
                    <button class="flex justify-center w-full items-center gap-2 text-[#FFC300] border border-[#FFC300] px-4 py-2 rounded-[10px]">
                        <i class="fa-solid fa-eye"></i> Explore This Home
                    </button>
                    <button class="text-[#FFC300] border border-[#FFC300] p-2 rounded-[8px]"><i class="fa-solid fa-bookmark text-xl"></i></button>
                </div>
            </div>
        </div>

        <!-- Property 7 -->
        <div class="bg-[#F5F5F5] text-black rounded-[30px] shadow-lg overflow-hidden xl:p-5 p-3">
            <div class="relative">
                <img src="./image/card7.png" alt="Property 3" class="w-full h-52 object-cover rounded-[25px]">
                <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                </div>
            </div>
            <div class="pt-5">
                <h3 class="font-semibold xl:text-xl text-lg text-[#3B3B3B]">Sunny 1-Bedroom Flat</h3>
                <p class="text-[#838383] xl:text-base text-sm mt-2">
                  <strong class="text-[#3B3B3B]">Key Features:</strong>  Miami, FL - South Beach
                </p>
                <p class="text-[#838383] xl:text-base text-sm mt-3">
                    <i class="fa-solid fa-location-dot"></i> <SPAN class="text-[#3B3B3B]">Location:</SPAN> 1 Bed, 1 Bath, Close to Public Transport, Parking
                </p>
                <p class="font-semibold 2xl:text-4xl xl:text-2xl text-[#3B3B3B] text-lg xl:mt-10 mt-5">&#163;1,200/month</p>
                <div class="mt-6 gap-4 flex items-center">
                    <button class="flex justify-center w-full items-center gap-2 text-[#FFC300] border border-[#FFC300] px-4 py-2 rounded-[10px]">
                        <i class="fa-solid fa-eye"></i> Explore This Home
                    </button>
                    <button class="text-[#FFC300] border border-[#FFC300] p-2 rounded-[8px]"><i class="fa-solid fa-bookmark text-xl"></i></button>
                </div>
            </div>
        </div>

        <!-- Property 8 -->
        <div class="bg-[#F5F5F5] text-black rounded-[30px] shadow-lg overflow-hidden xl:p-5 p-3">
            <div class="relative">
                <img src="./image/card8.png" alt="Property 4" class="w-full h-52 object-cover rounded-[25px]">
                <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                </div>
            </div>
            <div class="pt-5">
                <h3 class="font-semibold xl:text-xl text-lg text-[#3B3B3B]">Boutique 2-Bedroom Suite</h3>
                <p class="text-[#838383] xl:text-base text-sm mt-2">
                  <strong class="text-[#3B3B3B]">Key Features:</strong> 2 Beds, 2 Baths, Historic Building, Modern Kitchen
                </p>
                <p class="text-[#838383] xl:text-base text-sm mt-3">
                    <i class="fa-solid fa-location-dot"></i> <SPAN class="text-[#3B3B3B]">Location:</SPAN>Boston, MA - Back Bay
                </p>
                <p class="font-semibold 2xl:text-4xl xl:text-2xl text-[#3B3B3B] text-lg xl:mt-10 mt-5">&#163;1,750/month</p>
                <div class="mt-6 gap-4 flex items-center">
                    <button class="flex justify-center w-full items-center gap-2 text-[#FFC300] border border-[#FFC300] px-4 py-2 rounded-[10px]">
                        <i class="fa-solid fa-eye"></i> Explore This Home
                    </button>
                    <button class="text-[#FFC300] border border-[#FFC300] p-2 rounded-[8px]"><i class="fa-solid fa-bookmark text-xl"></i></button>
                </div>
            </div>
        </div>
    </div>

      <!-- Pagination -->
      <div class="flex justify-center my-10 space-x-2">
          <button class="text-gray-500">&lt;</button>
          <button class="text-yellow-500 font-bold">1</button>
          <button class="text-gray-500">2</button>
          <button class="text-gray-500">3</button>
          <button class="text-gray-500">4</button>
          <button class="text-gray-500">&gt;</button>
      </div>
  </div>
</section>




  <!-- Swiper -->
  <!-- <section class="xl:px-10 xl:pt-24 pt-12">
    <div class="lg:px-10 px-5 text-center">
        <h1 class="text-[#3B3B3B] xl:text-[54px] text-4xl font-light">Hear What Our Users Have to Say</h1>
        <p class="text-[#838383] xl:text-lg text-base xl:leading-8 leading-7 pt-4">Their experiences reflect our commitment to delivering exceptional service and seamless connections. Explore these <br class="xl:block hidden"> testimonials and see how we're making a difference in people’s lives.</p>
    </div>
 
   <div class="swiper mySwiper mt-10">
    <div class="swiper-wrapper">
        
      <div class="swiper-slide 2xl:p-10 p-5">
        <div class="w-28 h-28">
            <img src="img/markslider.png" class="" alt="">
        </div>
        <h1 class="xl:pt-10 pt-4">Mark Chen</h1>
        <p>Software Developer</p>
        <p class="xl:pt-6 pt-2">I was skeptical about finding a roommate online, but the swipe to match feature was fantastic. I met a roommate who shares my interests and we’ve been great friends ever since!</p>
        <div class="flex justify-center mt-4 space-x-1 text-yellow-400">
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
        </div>
      </div>
      <div class="swiper-slide 2xl:p-10 p-5">
        <div class="w-28 h-28">
            <img src="img/emilslider.png" class="" alt="">
        </div>
        <h1 class="xl:pt-10 pt-4">Emily Johnson</h1>
        <p>Recent Graduate</p>
        <p class="xl:pt-6 pt-2">Finding a new apartment was so easy with this platform! The advanced search tools let me filter for exactly what I needed, and the real-time notifications kept me updated on new listings. It’s truly a game-changer!</p>
        <div class="flex justify-center mt-4 space-x-1 text-yellow-400">
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
        </div>
      </div>
      <div class="swiper-slide 2xl:p-10 p-5">
        <div class="w-28 h-28">
            <img src="img/leeslider.png " class="" alt="">
        </div>
        <h1 class="xl:pt-10 pt-4">Samantha Lee</h1>
        <p>Designer</p>
        <p class="xl:pt-6 pt-2">The secure communication aspect really gave me peace of mind when discussing terms with potential landlords. I felt safe and supported throughout the entire process.</p>
        <div class="flex justify-center mt-4 space-x-1 text-yellow-400">
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
        </div>
      </div>
      <div class="swiper-slide 2xl:p-10 p-5">
        <div class="w-28 h-28">
            <img src="img/adams.png" class="" alt="">
        </div>
        <h1 class="xl:pt-10 pt-4">Chloe Adams</h1>
        <p>Marketing Specialist</p>
        <p class="xl:pt-6 pt-2">Being able to find a perfect home and roommate without stress was incredible. The system is intuitive, and the support is top-notch. The community feeling is a huge plus!Highly recommended!</p>
        <div class="flex justify-center mt-4 space-x-1 text-yellow-400">
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
        </div>
      </div>
      <div class="swiper-slide 2xl:p-10 p-5">
        <div class="w-28 h-28">
            <img src="img/markslider.png" class="" alt="">
        </div>
        <h1 class="xl:pt-10 pt-4">Mark Chen</h1>
        <p>Software Developer</p>
        <p class="xl:pt-6 pt-2">I was skeptical about finding a roommate online, but the swipe to match feature was fantastic. I met a roommate who shares my interests and we’ve been great friends ever since!</p>
        <div class="flex justify-center mt-4 space-x-1 text-yellow-400">
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
        </div>
      </div>
      
    </div>
    <div class="swiper-pagination pt-10"></div>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1, 
          spaceBetween: 10
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        1024: {
          slidesPerView: 3,  
          spaceBetween: 30
        },
        1280: {
          slidesPerView: 4   
        }
      }
    });
  </script>
  
  </section> -->

  <?php  
    require_once './inc/footer.php';
?>




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
  <!-- slider -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- icon kit -->
<script src="https://kit.fontawesome.com/844a407e82.js" crossorigin="anonymous"></script>

<!-- swipper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
    });
  </script>  

</body>
</html>