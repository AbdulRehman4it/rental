<?php
$webtitle = 'Companion';
require_once './inc/header.php';
?>
<body>
         <!-- navbar section  -->
         <section class="bg-cover bg-center 2xl:px-20 xl:px-10 px-5 h-full" style="background-image: url(./img/combg.png);">
         <?php  
    require_once './inc/nav.php';
?>
            <!-- Hero Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 mt-6 xl:py-36 py-20 2xl:px-28 xl:px-44 lg:px-10 px-5">
                <div class="bg-white p-7 rounded-[50px] shadow text-center"> <!--should go to flatemate page-->
                    <a href="./flatemate.php">
                    <div class="flex justify-center"><img src="img/firstpro.png" alt=""></div>
                    <h3 class="font-semibold mt-4 xl:text-2xl text-lg text-[#3B3B3B]">Find a Kosy Krew</h3>
                    <p class="text-[#838383] xl:text-base text-sm mt-2 xl:leading-8 leading-7">Swipe to connect with potential flatmates and start your shared living experience.</p>
                </a>
                </div>
        
                <div class="bg-white p-7 rounded-[50px] shadow text-center"> <!--should go to joinflate page-->
                    <a href="./joinflate.php">
                    <div class="flex justify-center"><img src="img/join.png" alt=""></div>
                    <h3 class="font-semibold mt-4 xl:text-2xl text-lg text-[#3B3B3B]">Join an existing Krew</h3>
                    <p class="text-[#838383] xl:text-base text-sm mt-2 xl:leading-8 leading-7">Fill a vacant slot in a shared home by joining an existing flat.</p>
                </a>
                </div>
        
                <div class="bg-white p-7 rounded-[50px] shadow text-center"> <!--should go to listroom page-->
                    <a href="./listroom.php">
                    <div class="flex justify-center"><img src="img/list.png" alt=""></div>
                    <h3 class="font-semibold mt-4 xl:text-2xl text-lg text-[#3B3B3B]">List a Room</h3>
                    <p class="text-[#838383] xl:text-base text-sm mt-2 xl:leading-8 leading-7">Rent out your room or property effortlessly.</p>
                </a>
                </div>
        
                <div class="bg-white p-7 rounded-[50px] shadow text-center"> <!--should go to create group page-->
                    <a href="./creategroup.php">
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