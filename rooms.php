<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TJ Hotel - Rooms</title>
    <?php require('inc/links.php')?>
    <link rel="stylesheet" href="css/common.css" />
  </head>
  <body>
    <?php require('inc/header.php');?>
    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
      <div
        class="h-line"
        style="
          width: 150px;
          height: 1.7px;
          background-color: black;
          margin: 0 auto;
        "
      ></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
          <nav
            class="navbar navbar-expand-lg navbar-light bg-white shadow rounded">
            <div class="container-fluid flex-column align-items-stretch">
              <div
                class="d-flex align-items-center justify-content-between mt-4"
              >
                <h4 class="me-2 mb-0">FILTER</h4>
                <button
                  class="navbar-toggler shadow-none"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#fillterDropdown"
                  aria-controls="navbarNav"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div
                class="collapse navbar-collapse flex-column mt-2 align-items-stretch"
                id="fillterDropdown"
              >
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3">CHECK AVAILABILITY</h5>
                  <label class="form-label" style="font-weight: 500"
                    >Check-in</label
                  >
                  <input type="date" class="form-control shadow-none mb-3" />
                  <label class="form-label" style="font-weight: 500"
                    >Check-out</label
                  >
                  <input type="date" class="form-control shadow-none" />
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3">FACILITIES</h5>
                  <div class="mb-2">
                    <input
                      type="checkbox"
                      id="f1"
                      class="form-check-input shadow-none me-1"
                    />
                    <label
                      class="form-check-label"
                      style="font-weight: 500"
                      for="f1"
                      >Facilities one</label
                    >
                  </div>
                  <div class="mb-2">
                    <input
                      type="checkbox"
                      id="f2"
                      class="form-check-input shadow-none me-1"
                    />
                    <label
                      class="form-check-label"
                      style="font-weight: 500"
                      for="f2"
                      >Facilities two</label
                    >
                  </div>
                  <div class="mb-2">
                    <input
                      type="checkbox"
                      id="f3"
                      class="form-check-input shadow-none me-1"
                    />
                    <label
                      class="form-check-label"
                      style="font-weight: 500"
                      for="f3"
                      >Facilities three</label
                    >
                  </div>
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3">GUESTS</h5>
                  <div class="d-flex">
                    <div class="me-3">
                      <label for="" class="form-label">Adults</label>
                      <input type="number" class="form-control shadow-none" />
                    </div>
                    <div>
                      <label for="" class="form-label">Children</label>
                      <input type="number" class="form-control shadow-none" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <div class="col-lg-9 col-md-12 px-4">
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-3 mb-3">
                <img src="Img/Rooms/1.jpg" class="img-fluid rounded" />
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-1">Simple Room Name</h5>
                <div class="feature mb-3">
                  <h6 class="mb-3">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >2 Rooms</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Bathrrom</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Balcony</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >3 Sofa</span
                  >
                </div>
                <div class="facilities mb-3">
                  <h6 class="mb-3">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >Wifi</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >telivision</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >AC</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >Room heater</span
                  >
                </div>
                <div class="guests mb-3">
                  <h6 class="mb-3">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >5 Adults</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >4 Chlidren</span
                  >
                </div>
              </div>
              <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-3">
                <h6 class="mb-4">₹200 per night</h6>
                <a
                  href="#"
                  class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100"
                  >Book Now</a
                >
                <a
                  href="#"
                  class="btn w-100 btn-sm btn-outline-dark shadow-none"
                  >More details</a
                >
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-3 mb-3">
                <img src="Img/Rooms/1.jpg" class="img-fluid rounded" />
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-1">Simple Room Name</h5>
                <div class="feature mb-3">
                  <h6 class="mb-3">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >2 Rooms</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Bathrrom</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Balcony</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >3 Sofa</span
                  >
                </div>
                <div class="facilities mb-3">
                  <h6 class="mb-3">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >Wifi</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >telivision</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >AC</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >Room heater</span
                  >
                </div>
                <div class="guests mb-3">
                  <h6 class="mb-3">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >5 Adults</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >4 Chlidren</span
                  >
                </div>
              </div>
              <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-3">
                <h6 class="mb-4">₹200 per night</h6>
                <a
                  href="#"
                  class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100"
                  >Book Now</a
                >
                <a
                  href="#"
                  class="btn w-100 btn-sm btn-outline-dark shadow-none"
                  >More details</a
                >
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-3 mb-3">
                <img src="Img/Rooms/1.jpg" class="img-fluid rounded" />
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-1">Simple Room Name</h5>
                <div class="feature mb-3">
                  <h6 class="mb-3">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >2 Rooms</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Bathrrom</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Balcony</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >3 Sofa</span
                  >
                </div>
                <div class="facilities mb-3">
                  <h6 class="mb-3">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >Wifi</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >telivision</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >AC</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >Room heater</span
                  >
                </div>
                <div class="guests mb-3">
                  <h6 class="mb-3">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >5 Adults</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >4 Chlidren</span
                  >
                </div>
              </div>
              <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-3">
                <h6 class="mb-4">₹200 per night</h6>
                <a
                  href="#"
                  class="btn btn-sm text-white custom-bg shadow-none mb-2 w-100"
                  >Book Now</a
                >
                <a
                  href="#"
                  class="btn w-100 btn-sm btn-outline-dark shadow-none"
                  >More details</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->
    <?php require('./inc/footer.php');?>
  </body>
</html>
