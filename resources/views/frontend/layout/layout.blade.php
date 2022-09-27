 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <link rel="stylesheet" href="css/utilites.css" />
     <link rel="stylesheet" href="css/styles.css" />
     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">


     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">



     <title>Afofida | Bring History To Your Doorstep</title>

 </head>

 <body>
     <div id="toggle"> </div>
     <div id="sidebar">
         <ul>
             <li><a href="#">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Tourist-Sites</a></li>
             <li><a href="#">Artifacts</a></li>
             <li><a href="#">Contact</a></li>

         </ul>

     </div>

     <div id="main">
         <!-- Navbar -->
         <div class="navbar">
             <div class="container flex">
                 <h1 class="home-link"> <a href="welcome.html"><i class="fas fa-arrow-left"></i> Event_Update</a></h1>
                 <nav>
                     <ul>
                         <li><a href="#">SignIn | SignUp</a></li>
                         <li><a href="#">Book Now</a></li>
                     </ul>
                 </nav>
             </div>
         </div>




         @yield('content')







         <!-- Info Section -->
         <section class="info-wrapper grid1">

             <div class="newsletter-wrapper">
                 <div class="newsletter-box">
                     <h1>Subscribe to our newsletter</h1>
                     <p>Be the first to be aware of our latest event and more </p>
                     <form action="">
                         <input type="text" name="">
                         <input type="submit" value="Join Us"name="">

                     </form>
                 </div>
             </div>

             <!-- Contact Info  -->
             <div class="contact-wrapper">
                 <div class="contact-box">
                     <h1>Contact Us</h1>

                     <form action=".php">

                         <input type="text" placeholder="Enter your name">


                         <input type="text" placeholder="Enter your email">

                         <label for="subject">Subject</label>
                         <textarea id="subject" name="subject" placeholder="Write something.."></textarea>

                         <input type="submit" value="Submit">

                     </form>





                 </div>
             </div>

         </section>



         <!-- Footer -->
         <footer class="footer-distributed">

             <div class="footer-left">

                 <h3>Company<span>logo</span></h3>

                 <p class="footer-links">
                     <a href="#" class="link-1">Home</a>

                     <a href="#">Blog</a>

                     <a href="#">Pricing</a>

                     <a href="#">About</a>

                     <a href="#">Faq</a>

                     <a href="#">Contact</a>
                 </p>

                 <p class="footer-company-name">Company Name © 2015</p>
             </div>

             <div class="footer-center">

                 <div>
                     <i class="fa fa-map-marker"></i>
                     <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
                 </div>

                 <div>
                     <i class="fa fa-phone"></i>
                     <p>+1.555.555.5555</p>
                 </div>

                 <div>
                     <i class="fa fa-envelope"></i>
                     <p><a href="mailto:support@company.com">support@company.com</a></p>
                 </div>

             </div>

             <div class="footer-right">

                 <p class="footer-company-about">
                     <span>About the company</span>
                     Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor
                     lacus vehicula sit amet.
                 </p>

                 <div class="footer-icons">

                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-linkedin"></i></a>
                     <a href="#"><i class="fa fa-github"></i></a>

                 </div>

             </div>

         </footer>


     </div>


     <script src="{{ asset('js/adminlte.min.js') }}" defer></script>


     <script>
         const toggle = document.getElementById('toggle');
         const sidebar = document.getElementById('sidebar');
         const main = document.getElementById('main');


         toggle.onclick = function() {
             toggle.classList.toggle('active');
             sidebar.classList.toggle('active');
             main.classList.toggle('active');

         }

         // Slider Javascript

         const slides = document.querySelectorAll(".slide");
         const next = document.querySelector("#next");
         const prev = document.querySelector("#prev");
         const auto = true;
         const intervalTime = 5000;
         let slideInterval;

         const nextSlide = () => {
             // Get current class
             const current = document.querySelector(".current");
             // Remove current class
             current.classList.remove("current");
             // Check for next slide
             if (current.nextElementSibling) {
                 // Add current to next sibling
                 current.nextElementSibling.classList.add("current");
             } else {
                 // Add current to start
                 slides[0].classList.add("current");
             }
             setTimeout(() => current.classList.remove("current"));
         };

         const prevSlide = () => {
             // Get current class
             const current = document.querySelector(".current");
             // Remove current class
             current.classList.remove("current");
             // Check for previous slide
             if (current.previousElementSibling) {
                 // Add current to previous sibling
                 current.previousElementSibling.classList.add("current");
             } else {
                 // Add current to last
                 slides[slides.length - 1].classList.add("current");
             }
             setTimeout(() => current.classList.remove("current"));
         };

         //Button events
         next.addEventListener("click", (e) => {
             nextSlide();
             if (auto) {
                 clearInterval(slideInterval);
                 slideInterval = setInterval(nextSlide, intervalTime);
             }
         });

         prev.addEventListener("click", (e) => {
             prevSlide();
             if (auto) {
                 clearInterval(slideInterval);
                 slideInterval = setInterval(prevSlide, intervalTime);
             }
         });

         // Aauto slide
         if (auto) {
             // Run next slide at interval time
             slideInterval = setInterval(nextSlide, intervalTime);
         }
     </script>
     <script></script>

 </body>

 </html>
