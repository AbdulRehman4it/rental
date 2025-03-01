<nav class="pt-10 relative">
            <div class="flex items-center justify-between rounded-[30px] bg-white px-5 py-5">
                <!-- Logo -->
                <div>
                    <a href="index.php">
                    <img src="./img/Logo2.png" alt="Company Logo">
                </a>
                </div>
    
               
                <div class="hidden lg:flex">
                    <ul class="flex xl:gap-10 gap-4">
                        <!-- <li><a href="index.html" class="text-[#838383] xl:text-base text-sm font-medium">How It Works</a></li> -->
                        <li><a href="search.php" class="text-[#838383] xl:text-base text-sm font-medium">Properties</a></li>
                        <  <!-- Companion Dropdown -->
                <li class="relative group">
                    <a href="#" class="text-[#838383] xl:text-base text-sm font-medium flex items-center">
                        Companion <i class="fa-solid fa-chevron-down ml-2 text-xs"></i>
                    </a>
                    <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <li><a href="companion.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">All Companions</a></li>
                        <li><a href="category1.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Category 1</a></li>
                        <li><a href="category2.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Category 2</a></li>
                    </ul>
                </li>
                        
                        <!-- <li><a href="profile.html" class="text-[#838383] xl:text-base text-sm font-medium">Testimonials</a></li> -->
                        <li><a href="contact.php" class="text-[#838383] xl:text-base text-sm font-medium">Contact Us</a></li>
                    </ul>
                </div>
    
                <!-- Sign Up Button (Desktop) -->
                <div class="hidden lg:block">
                    <a href="signup.php">
                    <button class="bg-[#FFC300] xl:px-12 xl:py-4 px-8 py-2 rounded-[20px] text-white text-lg">
                        <i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp; Sign up
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
                    <img src="./img/Logo2.png" alt="Company Logo">
                </a>
                    <button id="close-btn" class="text-[#838383] text-2xl">
                        <i class="fa-solid fa-xmark"></i> <!-- Close Icon -->
                    </button>
                </div>
                <ul class="text-center space-y-6 mt-10">
                    <!-- <li><a href="index.html" class="text-[#838383] text-lg font-medium">How It Works</a></li> -->
                    <li><a href="search.php" class="text-[#838383] text-lg font-medium">Properties</a></li>
                    <li><a href="companion.php" class="text-[#838383] text-lg font-medium">Companion</a></li>
                    <!-- <li><a href="singlelist.html" class="text-[#838383] text-lg font-medium">Find a home</a></li>
                    <li><a href="profile.html" class="text-[#838383] text-lg font-medium">Testimonials</a></li> -->
                    <li><a href="contact.php" class="text-[#838383] text-lg font-medium">Contact Us</a></li>
                    <li>
                        <a href="signup.php">
                        <button class="bg-[#FFC300] px-8 py-2 rounded-[20px] text-white text-lg w-3/4"> <i class="fa-solid fa-circle-user"></i>&nbsp; Sign up</button>
                    </a>
                    </li>
                </ul>
            </div>
</nav>