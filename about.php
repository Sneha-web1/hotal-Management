<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TJ Hotel - About</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="css/common.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <style>
      .box:hover {
        border-top: 4px solid var(--teal) !important;
        transition: 0.3s all;
      }
    </style>
  </head>
  <body>
    <?php require('inc/header.php'); ?>
    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">ABOUT US</h2>
      <div
        class="h-line"
        style="
          width: 150px;
          height: 1.7px;
          background-color: black;
          margin: 0 auto;
        "
      ></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
        molestiae architecto odit <br />
        porro perferendis itaque error illo distinctio qui aspernatur.
      </p>
    </div>
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
          <h3 class="mb-3">Lorem ipsum dolor sit</h3>
          <p class="text-align-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
            sunt voluptatibus quae officiis consequuntur excepturi beatae. Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Perferendis sunt
            voluptatibus quae officiis consequuntur excepturi beatae.
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
          <img
            src="./Img/About/img-1.jpeg"
            class="w-100"
            style="height: 350px; object-fit: contain"
            alt="About Image"
          />
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="ng-white rounded shadow p-4 border-top border-4 text-center box"
          >
            <img src="Img/About/hotel.svg" width="70px" />
            <h4>100+ ROOMS</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="ng-white rounded shadow p-4 border-top border-4 text-center box"
          >
            <img src="Img/About/customers.svg" width="70px" />
            <h4>200+ ROOMS</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="ng-white rounded shadow p-4 border-top border-4 text-center box"
          >
            <img src="Img/About/rating.svg" width="70px" />
            <h4>150+ REVIEWS</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="ng-white rounded shadow p-4 border-top border-4 text-center box"
          >
            <img src="Img/About/staff.svg" width="70px" />
            <h4>200+ STAFFS</h4>
          </div>
        </div>
      </div>
    </div>
    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
      <div class="swiper mySwiper">
        <!-- Single swiper-wrapper containing multiple swiper-slide elements -->
        <div class="swiper-wrapper mb-5">
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 1</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 2</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 3</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 4</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 5</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 6</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 7</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 8</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 9</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="Img/About/team.jpg" class="w-100" />
            <h5 class="mt-2">Random Name 10</h5>
          </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Footer -->
    <?php require('./inc/footer.php'); ?>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4, // Set number of slides to show
        spaceBetween: 40,
        centeredSlides: true, // Center active slide
        loop: true, // Enable looping for infinite scroll
        autoplay: {
          delay: 3000, // Delay between slides in milliseconds
          disableOnInteraction: false, // Keep autoplay running after user interaction
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakponits:{
            320:{
                slidePerView:1,
            },
            640:{
                slidePerView:1,
            },
            768:{
                slidePerView:2,
            },
            1024:{
                slidePerView:3,
            },
        },
        slideToClickedSlide: true, // Enable slide movement on image click
        slideToClickedSlide: true, // Move to clicked slide
        preloadImages: true, // Preload images to avoid blank spaces
        watchSlidesProgress: true, // Track slide progress
        watchSlidesVisibility: true, // Track visibility of slides
      });
    </script>
  </body>
</html>
