<?php
$webtitle = 'Companion';
require_once './inc/header.php';
?>
<body>
         <!-- navbar section  -->
         <section class="bg-cover bg-center 2xl:px-20 xl:px-10 px-5 h-full" style="background-image: url(../build/img/combg.png);">
            <nav class="pt-10 relative">
                <div class="flex items-center justify-between rounded-[30px] bg-white px-5 py-5">
                    <!-- Logo -->
                    <div>
                        <a href="index.html">
                        <img src="img/Logo2.png" alt="Company Logo">
                    </a>
                    </div>
        
                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex">
                        <ul class="flex xl:gap-10 gap-4">
                            <li><a href="companion.html" class="text-[#838383] xl:text-base text-sm font-medium hover:text-[#FFC300]" >Browse Listings</a></li>
                            <li><a href="contact.html" class="text-[#838383] xl:text-base text-sm font-medium hover:text-[#FFC300]">Contact Us</a></li>
                        
                        </ul>
                    </div>
        
                    <!-- Sign Up Button (Desktop) -->
                    <div class="hidden lg:block">
                        <a href="signup.html">
                        <button class="bg-[#FFC300] xl:px-12 xl:py-4 px-8 py-2 rounded-[20px] text-white text-lg">
                            <i class="fa-solid fa-user"></i>&nbsp;&nbsp; Sign in
                        </button>
                    </a>
                    </div>
        
                    <!-- Mobile Menu Button -->
                    <div class="lg:hidden">
                        <button id="menu-btn" class="text-[#838383] focus:outline-none">
                            <i class="fa-solid fa-bars text-2xl" id="menu-icon"></i> <!-- Hamburger Icon -->
                        </button>
                    </div>
                </div>
        
                <!-- Mobile Menu (Hidden by Default) -->
                <div id="mobile-menu" class="fixed top-0 left-0 w-full h-full bg-white shadow-lg translate-y-[-100%] transition-transform duration-300">
                    <div class="flex justify-between items-center p-5">
                        <a href="index.html">
                            <img src="../build/img/Logo2.png" alt="Company Logo">
                        </a>
                        <button id="close-btn" class="text-[#838383] text-2xl">
                            <i class="fa-solid fa-xmark"></i> <!-- Close Icon -->
                        </button>
                    </div>
                    <ul class="text-center space-y-6 mt-10">
                        <li><a href="companion.html" class="text-[#838383] text-lg font-medium hover:text-[#FFC300]">Browse Listings</a></li>
                        <li><a href="contact.html" class="text-[#838383] text-lg font-medium hover:text-[#FFC300]">Contact Us</a></li>
                      
                        <li>
                            <a href="signup.html">
                            <button class="bg-[#FFC300] px-8 py-2 rounded-[20px] text-white text-lg w-3/4">Sign in</button>
                        </a>
                        </li>
                    </ul>
                </div>
            </nav>
        
            <!-- Hero Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 mt-6 xl:py-36 py-20 2xl:px-28 xl:px-44 lg:px-10 px-5">
                <div class="bg-white p-7 rounded-[50px] shadow text-center"> <!--should go to flatemate page-->
                    <a href="">
                    <div class="flex justify-center"><img src="img/firstpro.png" alt=""></div>
                    <h3 class="font-semibold mt-4 xl:text-2xl text-lg text-[#3B3B3B]">Find a Kosy Krew</h3>
                    <p class="text-[#838383] xl:text-base text-sm mt-2 xl:leading-8 leading-7">Swipe to connect with potential flatmates and start your shared living experience.</p>
                </a>
                </div>
        
                <div class="bg-white p-7 rounded-[50px] shadow text-center"> <!--should go to joinflate page-->
                    <a href="">
                    <div class="flex justify-center"><img src="img/join.png" alt=""></div>
                    <h3 class="font-semibold mt-4 xl:text-2xl text-lg text-[#3B3B3B]">Join an existing Krew</h3>
                    <p class="text-[#838383] xl:text-base text-sm mt-2 xl:leading-8 leading-7">Fill a vacant slot in a shared home by joining an existing flat.</p>
                </a>
                </div>
        
                <div class="bg-white p-7 rounded-[50px] shadow text-center"> <!--should go to listroom page-->
                    <a href="">
                    <div class="flex justify-center"><img src="img/list.png" alt=""></div>
                    <h3 class="font-semibold mt-4 xl:text-2xl text-lg text-[#3B3B3B]">List a Room</h3>
                    <p class="text-[#838383] xl:text-base text-sm mt-2 xl:leading-8 leading-7">Rent out your room or property effortlessly.</p>
                </a>
                </div>
        
                <div class="bg-white p-7 rounded-[50px] shadow text-center"> <!--should go to create group page-->
                    <a href="">
                    <div class="flex justify-center"><img src="img/create.png" alt=""></div>
                    <h3 class="font-semibold mt-4 xl:text-2xl text-lg text-[#3B3B3B]">Create/Start your own Krew</h3>
                    <p class="text-[#838383] xl:text-base text-sm mt-2 xl:leading-8 leading-7">Form your ideal renting group & embark on a home search.</p>
                </a>
                </div>
        
                <!-- <div class="bg-white p-7 rounded-[50px] shadow text-center">
                    <div class="flex justify-center"><img src="img/crew.png" alt=""></div>
                    <h3 class="font-semibold mt-4 xl:text-2xl text-lg text-[#3B3B3B]">Join a Krew</h3>
                    <p class="text-[#838383] xl:text-base text-sm mt-2 xl:leading-8 leading-7">Browse and join a group that fits your lifestyle and preferences.</p>
                </div> -->
            </div>
        </section>



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