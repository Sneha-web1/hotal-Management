<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TJ Hotel</title>
    <?php require('inc/links.php')?>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <style>
      .availbiltity-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media (max-width: 575px) {
        .availbiltity-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }
    </style>
    <style>
      .testimonial-swiper {
        width: 100%;
        max-width: 90%;
        margin: 0 auto;
        padding-top: 50px;
        padding-bottom: 50px;
      }
      .testimonial-slide {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        padding: 20px !important;
        height: 250px;
      }
      .testimonial-image {
        width: 80px !important;
        height: 80px !important;
        border-radius: 50%;
        margin-bottom: 15px;
      }
      .testimonial-text {
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
      }
      .testimonial-name {
        font-weight: bold;
        font-size: 16px;
        color: #555;
      }
      @media (max-width: 420px) {
        .testimonial-slide {
          padding: 35px !important;
          height: 300px !important;
        }
      }
    </style>
  </head>
  <body>
    <?php require('inc/header.php');?>
    <!--Slider Start -->
    <div class="container-fiuid px-lg-4 mt-4">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./Img/Slider/img-1.jpg" alt="Image 1" class="d-block" />
          </div>
          <div class="swiper-slide">
            <img src="./Img/Slider/img-2.jpg" alt="Image 2" class="d-block" />
          </div>
          <div class="swiper-slide">
            <img src="./Img/Slider/img-3.webp" alt="Image 3" class="d-block" />
          </div>
          <div class="swiper-slide">
            <img src="./Img/Slider/img-4.jpg" alt="Image 4" class="d-block" />
          </div>
          <div class="swiper-slide">
            <img src="./Img/Slider/img-5.jpeg" alt="Image 5" class="d-block" />
          </div>
          <div class="swiper-slide">
            <img src="./Img/Slider/img-6.jpg" alt="Image 6" class="d-block" />
          </div>
        </div>
      </div>
    </div>
    <!--Slider End -->

    <!-- Check availbiltity form-->
    <div class="container availbiltity-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4">
          <h5 class="mb-4">Check Booking Availbiltity</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Check-in</label
                >
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Check-out</label
                >
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500">Adult</label>
                <select class="form-select shadow-none">
                  <option value="1"></option>
                  <option value="1"></option>
                  <option value="1"></option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Children</label
                >
                <select class="form-select shadow-none">
                  <option value="1"></option>
                  <option value="1"></option>
                  <option value="1"></option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button
                  type="submit"
                  class="btn text-white shadow-none custom-bg"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--Check availbiltity form ENd-->

    <!--Our Rooms-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="./Img/Rooms/1.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">₹20000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  1 Bathroms
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge bg-light text-dark text-wrap"> 3 Sofa </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge bg-light text-dark text-wrap"> Wifi </span>
                <span class="badge bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge bg-light text-dark text-wrap"> AC </span>
                <span class="badge bg-light text-dark text-wrap">
                  Room heater
                </span>
              </div>
              <div class="gusets mb-4">
                <h6 class="mb-1">Gusets</h6>
                <span class="badge bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  4 Chlidren
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Ratings</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm custom-bg text-white shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="./Img/Rooms/1.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">₹20000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  1 Bathroms
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge bg-light text-dark text-wrap"> 3 Sofa </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge bg-light text-dark text-wrap"> Wifi </span>
                <span class="badge bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge bg-light text-dark text-wrap"> AC </span>
                <span class="badge bg-light text-dark text-wrap">
                  Room heater
                </span>
              </div>
              <div class="gusets mb-4">
                <h6 class="mb-1">Gusets</h6>
                <span class="badge bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  4 Chlidren
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Ratings</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm custom-bg text-white shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="./Img/Rooms/1.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">₹20000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  1 Bathroms
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge bg-light text-dark text-wrap"> 3 Sofa </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge bg-light text-dark text-wrap"> Wifi </span>
                <span class="badge bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge bg-light text-dark text-wrap"> AC </span>
                <span class="badge bg-light text-dark text-wrap">
                  Room heater
                </span>
              </div>
              <div class="gusets mb-4">
                <h6 class="mb-1">Gusets</h6>
                <span class="badge bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge bg-light text-dark text-wrap">
                  4 Chlidren
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Ratings</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm custom-bg text-white shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center my-5">
          <a
            href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
            >More Rooms>>></a
          >
        </div>
      </div>
    </div>

    <!--our Facilities-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
          <img src="./Img/Facilities/1.png" width="80px" />
          <h5>Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
          <img src="./Img/Facilities/1.png" width="80px" />
          <h5>Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
          <img src="./Img/Facilities/1.png" width="80px" />
          <h5>Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
          <img src="./Img/Facilities/1.png" width="80px" />
          <h5>Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
          <img src="./Img/Facilities/1.png" width="80px" />
          <h5>Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a
            href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
            >More Facilities>>></a
          >
        </div>
      </div>
    </div>
    <!--our Facilities-->

    <!--Testimonials start-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <!-- Swiper Structure for Testimonials -->
    <div class="swiper testimonial-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide1 testimonial-slide bg-white p-4">
          <img
            src="https://via.placeholder.com/80"
            alt="Client 1"
            class="testimonial-image d-flex align-items-center"
          />
          <h6>Random User1</h6>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis
            aut suscipit tempora reiciendis. Dolorum, aspernatur.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide swiper-slide1 testimonial-slide">
          <img
            src="https://via.placeholder.com/80"
            alt="Client 1"
            class="testimonial-image d-flex align-items-center"
          />
          <h6>Random User1</h6>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis
            aut suscipit tempora reiciendis. Dolorum, aspernatur.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide swiper-slide1 testimonial-slide">
          <img
            src="https://via.placeholder.com/80"
            alt="Client 1"
            class="testimonial-image d-flex align-items-center"
          />
          <h6>Random User1</h6>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis
            aut suscipit tempora reiciendis. Dolorum, aspernatur.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide swiper-slide1 testimonial-slide">
          <img
            src="https://via.placeholder.com/80"
            alt="Client 1"
            class="testimonial-image d-flex align-items-center"
          />
          <h6>Random User1</h6>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis
            aut suscipit tempora reiciendis. Dolorum, aspernatur.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide swiper-slide1 testimonial-slide">
          <img
            src="https://via.placeholder.com/80"
            alt="Client 1"
            class="testimonial-image d-flex align-items-center"
          />
          <h6>Random User1</h6>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis
            aut suscipit tempora reiciendis. Dolorum, aspernatur.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-3">
      <a
        href="#"
        class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
        >See More >>></a
      >
    </div>
    <!--Testimonials End-->

    <!--Reach us-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded shadow">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d7146.9995604207925!2d80.34001249872938!3d26.40734378944842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjbCsDI0JzMyLjIiTiA4MMKwMjAnMzAuMSJF!5e0!3m2!1sen!2sin!4v1731504090400!5m2!1sen!2sin"
            height="320"
            style="border: 0"
            allowfullscreen=""
            class="w-100 rounded"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded shadow mb-2">
            <h5>Call us</h5>
            <a
              href="tel: +919140018098"
              class="d-inline-block text-decoration-none text-dark mb-2"
              ><i class="bi bi-telephone-fill me-1"></i> +919140018098</a
            >
            <br />
            <a
              href="tel: +919140018098"
              class="d-inline-block text-decoration-none text-dark mb-2"
              ><i class="bi bi-telephone-fill"></i> +919140018098</a
            >
          </div>
          <div class="bg-white p-4 rounded shadow">
            <h5>Follow us</h5>
            <a
              href="#"
              class="d-inline-block text-decoration-none text-dark mb-2"
              ><span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter-x me-1"></i> Twitter</span
              ></a
            >
            <br />
            <a
              href="#"
              class="d-inline-block text-decoration-none text-dark mb-2"
              ><span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i> Facebook</span
              ></a
            >
            <br />
            <a
              href="#"
              class="d-inline-block text-decoration-none text-dark mb-2"
              ><span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i> Twitter</span
              ></a
            >
          </div>
        </div>
      </div>
    </div>
    <!--Reach us End-->

    <!--Footer-->
    <?php require('./inc/footer.php');?>
  </body>
</html>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".swiper-container", {
    effect: "fade",
    fadeEffect: { crossFade: true },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    loop: true,
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".testimonial-swiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 3,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });

    // Add click event to each slide to slide to the clicked slide
    document.querySelectorAll(".swiper-slide1").forEach((slide, index) => {
      slide.addEventListener("click", () => {
        swiper.slideTo(index);
      });
    });
  });
</script>
