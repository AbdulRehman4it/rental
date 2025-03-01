<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>JOINflate</title>
   
</head>
<body class="bg-[#EEEEEE]">
<!-- navbar -->
  <section class="2xl:px-20 xl:px-10 px-5">
  <?php  
    require_once './inc/nav.php';
?>
  </section>

  <!-- search section -->
  <section >
    <div class="lg:pt-32 2xl:px-20 lg:px-10 px-5 pt-12">
        <div class="px-4">
            <h1 class=" 2xl:text-7xl xl:text-5xl lg:text-4xl text-3xl font-light text-[#3B3B3B] gap-2 md:gap-0" >Find Your Next <span class="text-[#FFC300] font-bold">Home</span> in an <span class="text-[#FFC300] font-bold">Existing Flatt</span></h1>
            <p class="2xl:text-3xl lg:text-2xl text-lg text-[#838383] pt-8">Join a Shared Living Arrangement <span class="text-[#3B3B3B]">That Suits You</span></p>
        </div>
      
    
    <!-- find your name  -->
      <div class="mt-8 bg-white shadow-md rounded-[20px] p-8">
        <div>
            <h1 class="text-[#3B3B3B] 2xl:text-[26px] text-xl font-semibold">Find Your Next Home</h1>
        </div>
    <div class="flex flex-col lg:flex-row gap-5 pt-5">
                    
        <select class="flex-1 p-2 border rounded-[20px] bg-[#EEEEEE] text-[#838383]">
            <option><i class="fa-solid fa-location-dot"></i> Location</option>
        </select>
        <select class="flex-1 p-1 border rounded-[20px] bg-[#EEEEEE] text-[#838383]">
            <option><i class="fa-solid fa-dollar-sign"></i> Budget</option>
        </select>
        <select class="flex-1 p-1 border rounded-[20px] bg-[#EEEEEE] text-[#867575]">
            <option><i class="fa-solid fa-house text-[#838383]"></i> Members</option>
        </select>
       
        <button class="bg-[#FFC300] text-white px-32 py-3 rounded-[20px]">Search</button></div>
      
    </div>
</section>

<!-- searches -->
<section class="2xl:px-20 lg:px-10 px-5 pt-10 2xl:pb-20 pb-10">
      
    <div class="mt-6">
        <h3 class="text-[#838383] font-semibold 2xl:text-2xl lg:text-xl text-lg">Current Search</h3>
       
       
    </div>
    <div class="flex flex-wrap gap-2 bg-[#EEEEEE]  mt-4">
        <span class=" text-[#3B3B3B] bg-[#F5F5F5] px-3 py-1 rounded-md xl:text-base text-sm"><span class="text-[#FFC300]">Location:</span> London, UK <button class=" text-red-500">&times;</button></span>
        <span class=" text-[#3B3B3B] bg-[#F5F5F5] px-3 py-1 rounded-md xl:text-base text-sm"><span class="text-[#FFC300]">Budget:</span>  £400-£800 per person <button class=" text-red-500">&times;</button></span>
        <span class=" text-[#3B3B3B] bg-[#F5F5F5] px-3 py-1 rounded-md xl:text-base text-sm"><span class="text-[#FFC300]">Members:</span> 5 <button class=" text-red-500">&times;</button></span>
      
    </div>
    
</section>
<hr  class="mx-10 border">

<!-- cards -->
<section class="2xl:px-20 lg:px-10 px-5 pt-10 2xl:pb-20 pb-10">
    <div class="">
        <div class="flex flex-wrap justify-center gap-10">
            <!-- Card 1 -->
            <div class="flex flex-col sm:flex-row bg-gray-100 rounded-2xl shadow-lg p-4 gap-4 w-full md:w-full  sm:w-[48%] lg:w-[45%]">
                <div class="relative w-full sm:w-1/2">
                    <img src="./img/flate1.png" alt="Flat Image" class="rounded-lg w-full h-full object-cover">
                </div>
                <div class="w-full sm:w-1/2">
                    <h2 class="text-xl font-semibold py-4 text-[#3B3B3B]">Flat Available in Notting Hill</h2>
                    <p class="text-[#838383]"><strong>Krew:</strong> Royal oaks</p>
                    <p class="text-[#838383] py-4"><strong>Krew members:</strong> 5</p>
                    <hr>
                    <p class="text-[#838383] py-4"><strong>Number of Bedrooms:</strong> 3</p>
                    <p class="text-[#838383]"><strong>Shared Facilities:</strong> Modern Kitchen, Cozy Living Room, Patio Garden</p>
                    <p class="text-[#838383] py-4"><strong>Move-in Date:</strong> April 5, 2024</p>
                    <p class="text-[#838383] py-4"><strong>Includes Bills:</strong> Yes</p>
                    <hr>
                    <div class="pt-6">
                        <button class="w-full bg-transparent text-[#FFC300] font-medium py-2 rounded-lg border border-[#FFC300]"><i class="fa-solid fa-building"></i> Request to Join This Flat</button>
                    </div>
                </div>
            </div>
            
            <!--  cards 2 -->
            <div class="flex flex-col sm:flex-row bg-gray-100 rounded-2xl shadow-lg p-4 gap-4 w-full md:w-full  sm:w-[48%] lg:w-[45%]">
                <div class="relative w-full sm:w-1/2">
                    <img src="./img/flate2.png" alt="Flat Image" class="rounded-lg w-full h-full object-cover">
                </div>
                <div class="w-full sm:w-1/2">
                    <h2 class="text-xl font-semibold py-4 text-[#3B3B3B]">Flat Available in Notting Hill</h2>
                    <p class="text-[#838383]"><strong>Krew:</strong> Royal oaks</p>
                    <p class="text-[#838383] py-4"><strong>Krew members:</strong> 5</p>
                    <hr>
                    <p class="text-[#838383] py-4"><strong>Number of Bedrooms:</strong> 3</p>
                    <p class="text-[#838383]"><strong>Shared Facilities:</strong> Modern Kitchen, Cozy Living Room, Patio Garden</p>
                    <p class="text-[#838383] py-4"><strong>Move-in Date:</strong> April 5, 2024</p>
                    <p class="text-[#838383] py-4"><strong>Includes Bills:</strong> Yes</p>
                    <hr>
                    <div class="pt-6">
                        <button class="w-full bg-transparent text-[#FFC300] font-medium py-2 rounded-lg border border-[#FFC300]"><i class="fa-solid fa-building"></i>  Request to Join This Flat</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-wrap justify-center gap-10 pt-10">
            <!-- Card 3 -->
            <div class="flex flex-col sm:flex-row bg-gray-100 rounded-2xl shadow-lg p-4 gap-4 w-full md:w-full  sm:w-[48%] lg:w-[45%]">
                <div class="relative w-full sm:w-1/2">
                    <img src="./img/flate3.png" alt="Flat Image" class="rounded-lg w-full h-full object-cover">
                </div>
                <div class="w-full sm:w-1/2">
                    <h2 class="text-xl font-semibold py-4 text-[#3B3B3B]">Flat Available in Notting Hill</h2>
                    <p class="text-[#838383]"><strong>Krew:</strong> Royal oaks</p>
                    <p class="text-[#838383] py-4"><strong>Krew members:</strong> 5</p>
                    <hr>
                    <p class="text-[#838383] py-4"><strong>Number of Bedrooms:</strong> 3</p>
                    <p class="text-[#838383]"><strong>Shared Facilities:</strong> Modern Kitchen, Cozy Living Room, Patio Garden</p>
                    <p class="text-[#838383] py-4"><strong>Move-in Date:</strong> April 5, 2024</p>
                    <p class="text-[#838383] py-4"><strong>Includes Bills:</strong> Yes</p>
                    <hr>
                    <div class="pt-6">
                        <button class="w-full bg-transparent text-[#FFC300] font-medium py-2 rounded-lg border border-[#FFC300]"><i class="fa-solid fa-building"></i> Request to Join This Flat</button>
                    </div>
                </div>
            </div>
            
            <!-- card 4 -->
            <div class="flex flex-col sm:flex-row bg-gray-100 rounded-2xl shadow-lg p-4 gap-4 w-full md:w-full  sm:w-[48%] lg:w-[45%]">
                <div class="relative w-full sm:w-1/2">
                    <img src="./img/flate4.png" alt="Flat Image" class="rounded-lg w-full h-full object-cover">
                </div>
                <div class="w-full sm:w-1/2">
                    <h2 class="text-xl font-semibold py-4 text-[#3B3B3B]">Flat Available in Notting Hill</h2>
                    <p class="text-[#838383]"><strong>Krew:</strong> Royal oaks</p>
                    <p class="text-[#838383] py-4"><strong>Krew members:</strong> 5</p>
                    <hr>
                    <p class="text-[#838383] py-4"><strong>Number of Bedrooms:</strong> 3</p>
                    <p class="text-[#838383]"><strong>Shared Facilities:</strong> Modern Kitchen, Cozy Living Room, Patio Garden</p>
                    <p class="text-[#838383] py-4"><strong>Move-in Date:</strong> April 5, 2024</p>
                    <p class="text-[#838383] py-4"><strong>Includes Bills:</strong> Yes</p>
                    <hr>
                    <div class="pt-6">
                        <button class="w-full bg-transparent text-[#FFC300] font-medium py-2 rounded-lg border border-[#FFC300]"><i class="fa-solid fa-building"></i> Request to Join This Flat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Pagination -->
     <div class="flex justify-center mt-8 space-x-2">
        <button class="text-gray-500">&lt;</button>
        <button class="text-yellow-500 font-bold">1</button>
        <button class="text-gray-500">2</button>
        <button class="text-gray-500">3</button>
        <button class="text-gray-500">4</button>
        <button class="text-gray-500">&gt;</button>
    </div>
</section>







    
         
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