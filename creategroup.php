<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-[#EEEEEE]">
    
          <!-- navbar section  -->
    <section class="bg-cover bg-center 2xl:px-20 xl:px-10 px-5 xl:h-[800px] h-[600px]" style="background-image: url(./img/listroombg.png);">
    <?php  
    require_once './inc/nav.php';
?>
    
        <!-- Hero Section -->
        <div class="xl:pt-40 pt-20 text-center">
            <h1 class="2xl:text-[110] xl:text-8xl text-4xl text-white font-light">Build Your Ideal <span class="italic font-bold"> Krew</span></h1>
            <p class="2xl:text-[26px] xl:text-xl text-lg pt-2 xl:pt-4 text-white 2xl:leading-8">Form your own krews and search your perfect home</p>
        
        </div>
    </section>

 <!-- information  -->
 <section class="2xl:px-52 xl:px-24 lg:px-12 px-5 -mt-24 xl:mb-36 mb-20">
    <div class="w-full">
        <div class="bg-[#F5F5F5] shadow-xl rounded-[30px] p-10 w-full">
            <p class="text-[#838383] xl:text-3xl text-xl xl:leading-[50px] leading-8 font-light">
                Creating a group lets you team up with like-minded individuals for a more personalized renting experience. Align your preferences and start your search with confidence.
            </p>
    
            <hr class="my-6 border-gray-300" />
    
    
            <!-- Property Details -->
            <div>
    
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                    <div>
                        <label class="text-sm text-[#3B3B3B] mt-4 font-medium">Group Name</label>
                        <input type="text" placeholder="Enter name here" class="w-full p-4 mt-3 border rounded-2xl bg-[#EEEEEE] text-[#838383]" />
                    </div>
    
                    <div>
                        <label class="text-sm text-[#3B3B3B] mt-4 font-medium">Number of Flatmates Needed</label>
                        <input type="text" placeholder="Looking for [2, 3, 4+] flatmates" class="w-full p-4 mt-3 border rounded-2xl bg-[#EEEEEE] text-[#838383]" />
                    </div>
                    <div>
                        <label class="text-sm text-[#3B3B3B] mt-4 font-medium">Preferred Location</label>
                        <input type="text" placeholder="Area/City" class="w-full p-4 mt-3 border rounded-2xl bg-[#EEEEEE] text-[#838383]" />
                    </div>
    
                    <div>
                        <label class="text-sm text-[#3B3B3B] mt-4 font-medium">Budget per person</label>
                        <input type="text" placeholder="Amount" class="w-full p-4 mt-3 border rounded-2xl bg-[#EEEEEE] text-[#838383]" />
                    </div>
                </div>

                <hr class="my-6 border-gray-300"/>
                
                <div class=" ">
                    <h3 class="xl:text-xl text-base text-[#3B3B3B] font-semibold">Household Vibe</h3>
                    <div class="grid md:grid-cols-3 xl:grid-cols-4 grid-cols-2 gap-4 mt-4">
                        <label class="flex items-center space-x-2 "><input type="checkbox" class="accent-white" checked> <span class="2xl:text-base text-sm text-[#838383]">Quiet</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" class="accent-white" checked> <span class="2xl:text-base text-sm text-[#838383]">Social</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" class="accent-white" checked> <span class="2xl:text-base text-sm text-[#838383]">Pet-Friendly</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" class="accent-white" checked> <span class="2xl:text-base text-sm text-[#838383]">Non-Smoking</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" class="accent-white" checked> <span class="2xl:text-base text-sm text-[#838383]">Fitness Enthusiast</span></label>
                        <label class="flex items-center space-x-2"><input type="checkbox" class="accent-white" checked> <span class="2xl:text-base text-sm text-[#838383]">Night Owl</span></label>
                    </div>
                </div>
               
            </div>
    
            <hr class="my-8 border-gray-300" />
    
            <!-- Submit Button -->
             <a href="">
            <button class=" bg-[#FFC300] text-[#F5F5F5] font-bold py-3 px-6 rounded-lg">
                Create Group
            </button>
        </a>
        </div>
    </div>
</section>



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
</body>
</html>