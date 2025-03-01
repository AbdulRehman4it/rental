<?php
$webtitle = 'Home';
require_once './inc/header.php';
?>
<body class="overflow-x-hidden ">
    <div id="bubble-screen" class="fixed top-0 left-0 h-screen w-screen bg-[#EEEEEE] overflow-hidden transition-transform duration-1000 flex items-center justify-center">
        <div id="bubbles" class="absolute w-full h-full" >
            <!-- Dynamically generated bubbles -->
        </div>
      
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex gap-4">
            <button class="bg-white p-3 rounded-lg shadow">Find your Kosy Krew</button>
            <button class="bg-white p-3 rounded-lg shadow">Browse properties</button>
            <button class="bg-white p-3 rounded-lg shadow">List a Room</button>
        </div>
    </div>
    
    <div id="new-page" class=" w-screen ">

    <section class="bg-cover bg-center 2xl:px-20 xl:px-10 px-5 xl:h-[1080px] h-[700px]" style="background-image: url(./img/BG.png);">
   <?php  
    require_once './inc/nav.php';
?>
        <!-- Hero Section -->
        <div class="xl:pt-60 pt-20 text-center">
            <p class="2xl:text-[44px] xl:text-4xl md:text-3xl text-2xl capitalize text-[#F5F5F5] italic ">Your next chapter begins here</p>
            <h1 class="2xl:text-[120px] xl:text-8xl text-5xl text-white font-light pt-2">Your <span class="italic font-bold">Perfect</span> Home Awaits</h1>
            <p class="2xl:text-[26px] xl:text-xl text-lg pt-2 xl:pt-5 text-white">Explore thousands of listings and find your dream flat or a compatible roommate with ease.</p>
           <a href="companion.html"> <button class="bg-[#FFC300] px-8 py-4 mt-8 rounded-[20px] text-white text-lg">Get Started &nbsp;&nbsp; <i class="fa-solid fa-arrow-right"></i></button></a>
        </div>
    </section>
    
  
    <!-- find your name  -->

    <div class="-mt-20 bg-white shadow-md rounded-[20px] p-8 xl:mx-20 lg:mx-10 mx-5">
        <h2 class="text-xl font-medium text-gray-900 mb-3">Find Your Next Home</h2>
        <div class="flex md:flex-row flex-col gap-4 md:gap-0 items-center ">
            <!-- Search Input -->
            <div class="flex items-center w-full bg-[#EEEEEE] rounded-full px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 10A7 7 0 1 0 10 17a7 7 0 0 0 7-7z"></path>
                </svg>
                <input type="text" placeholder="Search" class="w-full bg-[#EEEEEE] outline-none px-3 text-gray-600 placeholder-gray-500">
            </div>
            <!-- Filter Button (Matching Image) -->
            <button class="bg-[#EEEEEE] p-3 rounded-2xl mx-2 border border-gray-300 flex items-center justify-center shadow-sm hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6h4m-2-2v4m0 4v4m6-6H4"></path>
                </svg>
            </button>
            <!-- Search Button -->
            <button class="bg-[#FFC300] text-white xl:px-36 px-20 py-3 rounded-full font-medium">
                Search
            </button>
        </div>
    </div>

<!-- welcom flat section  -->
<section class="lg:pt-32 lg:pb-36 pb-12 xl:px-20 lg:px-10 px-5 pt-12">
    <div class="">
        <h1 class=" text-center 2xl:text-8xl xl:text-7xl lg:text-5xl text-4xl font-light text-[#3B3B3B] gap-2 md:gap-0" >Welcome to <span class="italic text-[#FFC300] font-bold">KosyKeys!</span></h1>
        <p class="2xl:text-[34px] xl:text-2xl text-xl font-normal 2xl:leading-[74px] xl:leading-[64px] leading-[45px] pt-5 text-center text-[#838383]">Finding your next home has never been this easy! Whether you're searching for the perfect place or <span class="text-[#3B3B3B]"> the ideal roommate who shares your lifestyle,</span> KosyKeys makes it effortless.</p>
        <div class="text-center pt-8">
            <p class="italic text-[#838383] 2xl:text-3xl lg:text-2xl text-xl uppercase">Browse verified listings <span class="inline-block align-middle mx-3"> <img src="img/key.png" class="inline-block" alt=""> </span>Connect with compatible housemates <span class="inline-block align-middle mx-3"> <img src="img/key.png" class="inline-block" alt=""> </span> List your property hassle-free</p>
        </div>
        <div class="pt-10">
            <img src="../build/img/matchimg.png" alt="">
        </div>
    </div>
</section>

<!-- featured section  -->
<section class="bg-[#F5F5F5] xl:px-20 lg:px-10 px-5 xl:pt-20 pt-10 pb-10 xl:pb-24">
    <div class="flex justify-between items-center md:flex-row flex-col">
        <div class="md:w-3/5 w-full">
            <h1 class="xl:text-[56px] xl:leading-[74px] leading-10 text-4xl font-light text-[#3B3B3B]">
                Smart, Simple, and Fun—Find Your Perfect Home or Flatmate!
            </h1>
            <p class="text-[#838383] xl:text-lg font-normal xl:leading-8 text-base leading-7 pt-4" >
                At KosyKeys, we make finding a <span class="text-[#3B3B3B]">home or the perfect housemate effortless.</span> Our smart platform helps you search, match, and connect in just a few steps. Whether you're looking for a <span class="text-[#3B3B3B]"> new place to live or someone to share a space with,</span> we provide powerful tools to streamline your journey.
            </p>
        </div>
        <div class="md:w-1/4 w-full pt-5 md:pt-0">
            <img src="../build/img/tools.png" alt="">
        </div>
    </div>
    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 xl:pt-20 pt-10 xl:gap-10 gap-4">
        <div class=" border-2 shadow-lg rounded-[30px] p-8">
            <h1 class="text-2xl font-semibold text-[#3B3B3B]">Search & Discover</h1>
            <p class="text-base leading-8 text-[#838383]">Browse verified listings tailored to your preferences.</p>
        </div>
        <div class=" border-2 shadow-lg rounded-[30px] p-8">
            <h1 class="text-2xl font-semibold text-[#3B3B3B]">Swipe to Match</h1>
            <p class="text-base leading-8 text-[#838383]">Looking for a home or a roommate? <span class="text-[#3B3B3B] font-semibold">Swipe right</span> on properties and people that match your vibe <span class="text-[#3B3B3B] font-semibold">—it’s that easy!</span></p>
        </div>
        <div class=" border-2 shadow-lg rounded-[30px] p-8">
            <h1 class="text-2xl font-semibold text-[#3B3B3B]">Real-Time Notifications</h1>
            <p class="text-base leading-8 text-[#838383]">Never miss out! Get <span class="text-[#3B3B3B] font-semibold">instant alerts</span> for new listings, matches, and messages so you’re always ahead in your search.</p>
        </div>
        <div class=" border-2 shadow-lg rounded-[30px] p-8">
            <h1 class="text-2xl font-semibold text-[#3B3B3B]">Secure Communication</h1>
            <p class="text-base leading-8 text-[#838383]">Chat with landlords and roommates <span class="text-[#3B3B3B] font-semibold">safely</span> through our built-in messaging system. No spam, <span class="text-[#3B3B3B] font-semibold">no hassle—just real connections.</span></p>
        </div>
    </div>
</section>

    <!-- join section  -->
<section class="bg-cover bg-center xl:px-20 lg:px-10 px-5" style="background-image: url(img/communitybg.png);">
    <div class=" lg:py-32 py-24 text-center">
        <h1 class="2xl:text-[120px] 2xl:leading-[130px] xl:text-8xl text-5xl text-white font-light">Start your journey now and find a home that <span class="italic font-bold">truly fits </span> you!</h1>
        <p class="2xl:text-[26px] xl:text-xl text-lg pt-2 xl:pt-5 text-white">Sign up now and take the first step toward a stress-free home search.</p>
       <a href="companion.html"> <button class="bg-[#FFC300] px-8 py-4 md:mt-16 mt-10 rounded-[20px] text-white text-lg">Find Your Match! &nbsp;&nbsp; <i class="fa-solid fa-arrow-right"></i></button></a>
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
 <!-- bubbles  -->
 <script>
document.addEventListener("DOMContentLoaded", () => {
    const bubbleContainer = document.getElementById("bubbles");
    const bubbleScreen = document.getElementById("bubble-screen");
    const newPage = document.getElementById("new-page");
    const bubbles = [];

    // Background images for 10 bubbles
    const bubbleImages = [
        "url('./img/p1.jpg')",
        "url('./img/p2.jpg')",
        "url('./img/p3.jpg')",
        "url('./img/p4.jpg')",
        "url('./img/p5.jpg')",
        "url('./img/p6.jpg')",
        "url('./img/p7.jpg')",
        "url('./img/p8.jpg')",
        "url('./img/p9.jpg')",
        "url('./img/p10.jpg')"
    ];

    // Navigation links for each bubble
    const bubbleLinks = [
        "./contact.php",
        "./companion.php",
        "./creategroup.php",
        "./flatmate.php",
        "./index.php",
        "./joinflate.php",
        "./listroom.php",
        "./search.php",
        "./signup.php",
        "./about.php"
    ];

    function createBubble(index) {
        let bubble = document.createElement("div");
        bubble.classList.add("bubble");
        let size = 300; // Fixed bubble size
        bubble.style.width = `${size}px`;
        bubble.style.height = `${size}px`;
        bubble.style.backgroundImage = bubbleImages[index]; // Set background image
        bubble.style.backgroundSize = "cover";
        bubble.style.borderRadius = "50%";
        bubble.style.position = "absolute";

        let randomX = Math.random() * (window.innerWidth - size);
        let randomY = Math.random() * (window.innerHeight - size);
        bubble.style.left = `${randomX}px`;
        bubble.style.top = `${randomY}px`;

        // On click, navigate to a page
        bubble.addEventListener("click", () => {
            window.location.href = bubbleLinks[index];
        });

        bubbleContainer.appendChild(bubble);

        bubbles.push({
            element: bubble,
            vx: (Math.random() - 0.5) * 4,
            vy: (Math.random() - 0.5) * 4
        });
    }

    // Create exactly 10 bubbles
    for (let i = 0; i < 10; i++) {
        createBubble(i);
    }

    function animateBubbles() {
        bubbles.forEach(bubble => {
            let rect = bubble.element.getBoundingClientRect();
            let x = parseFloat(bubble.element.style.left);
            let y = parseFloat(bubble.element.style.top);

            if (x + rect.width >= window.innerWidth || x <= 0) bubble.vx *= -1;
            if (y + rect.height >= window.innerHeight || y <= 0) bubble.vy *= -1;

            bubble.element.style.left = `${x + bubble.vx}px`;
            bubble.element.style.top = `${y + bubble.vy}px`;
        });
        requestAnimationFrame(animateBubbles);
    }

    animateBubbles();
    let scrolled = false;
window.addEventListener("scroll", () => {
    if (!scrolled) {
        // Make the bubble screen transition slower
        bubbleScreen.style.transition = "transform 1.5s ease-in-out";
        bubbleScreen.style.transform = "translateY(-100%)";

        setTimeout(() => {
            bubbleContainer.innerHTML = ""; // Clear bubbles
            bubbleScreen.style.display = "none"; // Hide completely

            // Add a slight delay before scrolling for a smoother effect
            setTimeout(() => {
                const newPage = document.getElementById("new-page");
                window.scrollTo({
                    top: newPage.offsetTop, // Scroll 100px down from the top of new-page
                    behavior: "smooth"
                });
            }, 500); // Delay to make it feel more natural

        }, 1500); // Increased duration for a smoother transition

        scrolled = true;
    }
});

});

</script>

 <!-- <script>
    document.addEventListener("DOMContentLoaded", () => {
        const bubbleContainer = document.getElementById("bubbles");
        const bubbleScreen = document.getElementById("bubble-screen");
        const bubbles = [];
        
        function createBubble() {
            let bubble = document.createElement("div");
            bubble.classList.add("bubble");
            let size = Math.random() * 80 + 40;
            bubble.style.width = `${size}px`;
            bubble.style.height = `${size}px`;
            let randomX = Math.random() * (window.innerWidth - size);
            let randomY = Math.random() * (window.innerHeight - size);
            bubble.style.left = `${randomX}px`;
            bubble.style.top = `${randomY}px`;
            
            bubble.addEventListener("click", () => {
                bubble.remove();
            });
            
            bubbleContainer.appendChild(bubble);
            
            bubbles.push({
                element: bubble,
                vx: (Math.random() - 0.5) * 4,
                vy: (Math.random() - 0.5) * 4
            });
        }
        
        for (let i = 0; i < 15; i++) {
            createBubble();
        }
        
        function animateBubbles() {
            bubbles.forEach(bubble => {
                let rect = bubble.element.getBoundingClientRect();
                let x = parseFloat(bubble.element.style.left);
                let y = parseFloat(bubble.element.style.top);
                
                if (x + rect.width >= window.innerWidth || x <= 0) bubble.vx *= -1;
                if (y + rect.height >= window.innerHeight || y <= 0) bubble.vy *= -1;
                
                bubble.element.style.left = `${x + bubble.vx}px`;
                bubble.element.style.top = `${y + bubble.vy}px`;
            });
            requestAnimationFrame(animateBubbles);
        }
        
        animateBubbles();
        
        let scrolled = false;
        window.addEventListener("scroll", () => {
            if (!scrolled) {
                bubbleScreen.style.transform = "translateY(-100%)";
                setTimeout(() => {
                    bubbleContainer.innerHTML = "";
                }, 1000);
                scrolled = true;
            }
        });
    });
</script> -->
</body>
</html>
