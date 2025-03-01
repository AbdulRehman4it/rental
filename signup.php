<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Sign in</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
<!-- swipwr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>
    <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>


</head>
<body class="bg-[#F5F5F5]">
<?php  
    require_once './inc/nav.php';
?>
<section>
    <div class="flex lg:flex-row flex-col  items-center justify-between px-10 py-10 gap-10">
        

<!-- Swiper -->
<div class="swiper mySwiper lg:w-1/2 w-full h-10">
    <div class="flex justify-between items-center -mb-14 -z-0">
        <div class="text-white font-bold text-xl flex items-center">
            <img src="./image/logo.png" alt="">
        </div>
        <button class="bg-transparent border border-white text-white px-4 py-2 rounded-lg text-sm">Back to website →</button>
    </div>
    <div class="swiper-wrapper  rounded-3xl">
      <div class="swiper-slide"><img src="./image/BG.png" class="rounded-2xl" alt=""></div>
      <div class="swiper-slide"><img src="./image/BG.png" class="rounded-2xl" alt=""></div>
      <div class="swiper-slide"><img src="./image/BG.png" class="rounded-2xl" alt=""></div>
      <div class="swiper-slide"><img src="./image/BG.png" class="rounded-2xl" alt=""></div>
      
    </div>
    <div class="swiper-scrollbar"></div>
  </div>



        <div class="lg:w-1/2  w-full px-6">
            <div>
                <h1 class="text-5xl text-[#3B3B3B]">Create Your Account</h1>
                <p class="text-[#838383] pt-2">Already have an account? <a href="signin.html"><span class="text-[#FFC300]">Log in</span></a></p>
            </div>
            <form class="mt-4">
                <div class="flex gap-4  justify-between">
                    <div class="w-1/2">
                        <input type="text" class="w-full mt-1 p-2  rounded-2xl focus:outline-none focus:ring-2 focus:ring-black dark:focus:ring-white " placeholder="First Name" />
                    </div>
                    <div class="w-1/2">
                        
                        <input type="text" class="w-full mt-1 p-2  rounded-2xl focus:outline-none focus:ring-2 focus:ring-black dark:focus:ring-white " placeholder="Last Name" />
                    </div>
                </div>
                <div class="mt-4">
                  
                    <input type="email" class="w-full mt-1 p-2  rounded-2xl focus:outline-none focus:ring-2 focus:ring-black dark:focus:ring-white " placeholder="Email Address" />
                </div>
                <div class="space-y-2" x-data="{ show: false }">
                  
                  <div class="relative mt-4">
                      <input :type="show ? 'text' : 'password'" class="focus:bg-white focus:text-black   border-gray-300 text-gray-900 sm:text-sm rounded-2xl block w-full px-2 py-2 pr-10" placeholder="password">
                      <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 flex items-center px-3">
                          <i :class="show ? 'fa fa-eye' : 'fa fa-eye-slash'" class="text-gray-500"></i>
                      </button>
                  </div>
                  <div class="relative mt-4">
                    <input :type="show ? 'text' : 'password'" class="focus:bg-white   text-gray-900 sm:text-sm rounded-2xl block w-full px-2 py-2 pr-10" placeholder="Confirm password">
                    <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 flex items-center px-3">
                        <i :class="show ? 'fa fa-eye' : 'fa fa-eye-slash'" class="text-gray-500"></i>
                    </button>
                </div>
                </div>
                
                <div class="flex  space-x-2 pt-4">
                  <input class="w-5 h-5 border border-gray-300 rounded bg-gray-50  focus:ring-white ring-offset-white accent-[#FFC300]" type="checkbox">
                  <p class="text-sm text-gray-500 ">
                    I agree to the Terms & Conditions
                     
                  </p>
              </div>
              <button type="submit" class="w-full text-sm font-semibold mt-4 bg-[#FFC300]  text-white p-2 rounded-md "> <a href="login.html">Create Account</a> </button>
            </form>
            <div class="w-full text-center">
                <!-- Divider -->
                <div class="flex items-center justify-center my-4">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="mx-3 text-gray-500 text-sm">Or sign up with</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>
        
                <!-- Sign-in Buttons -->
                <div class="flex justify-center space-x-4">
                    <!-- Google Button -->
                    <button class="flex items-center justify-center w-auto px-12 py-2 border border-gray-300 rounded-full text-gray-700 shadow-sm hover:bg-gray-100 transition">
                        <img src="./image/google.png" alt="Google" class="w-5 h-5 mr-2">
                        Google
                    </button>
        
                    <!-- Apple Button -->
                    <button class="flex items-center justify-center w-40 px-4 py-2 border border-gray-300 rounded-full text-gray-700 shadow-sm hover:bg-gray-100 transition">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" class="w-5 h-5 mr-2">
                        Apple
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</section>
<?php  
    require_once './inc/footer.php';
?>
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <!-- Initialize Swiper -->
   <script>
     var swiper = new Swiper(".mySwiper", {
       scrollbar: {
         el: ".swiper-scrollbar",
         hide: true,
       },
     });
   </script>
</body>
</html>
