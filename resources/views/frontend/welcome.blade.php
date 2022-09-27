<!DOCTYPE html>
<html lang="en">
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /><title>Afofida | Bring History To Your Doorstep</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="slider">
      <a class="skip" href="{{url('/home1')}}"
        >Skip To Home <i class="fas fa-arrow-right"></i
      ></a>

      <div class="slide current">
        <div class="content">
          <h1>Slider One</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            provident voluptate facere non dolor nisi amet officia obcaecati
            
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Slider Two</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            provident voluptate facere non dolor nisi amet officia obcaecati
            optio accusantium?
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Slider Three</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            provident voluptate facere non dolor nisi amet officia obcaecati
            optio accusantium?
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Slider Four</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            provident voluptate facere non dolor nisi amet officia obcaecati
            optio accusantium?
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Slider Five</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            provident voluptate facere non dolor nisi amet officia obcaecati
            optio accusantium?
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Slider Six</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            provident voluptate facere non dolor nisi amet officia obcaecati
            optio accusantium?
          </p>
        </div>
      </div>

      <div class="slide">
        <div class="content">
          <h1>Slider Seven</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            provident voluptate facere non dolor nisi amet officia obcaecati
            optio accusantium?
          </p>
        </div>
      </div>
    </div>

    <div class="button">
      <button id="prev"><i class="fas fa-arrow-left"></i></button>
      <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>

    <script>
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
          slideInterval = setInterval(nextSlide, intervalTime);
        }
      });

      // Aauto slide
      if (auto) {
        // Run next slide at interval time
        slideInterval = setInterval(nextSlide, intervalTime);
      }
    </script>
  </body>
</html>
