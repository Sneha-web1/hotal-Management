<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TJ Hotel - Contact</title>
    <?php require('inc/links.php')?>
    <link rel="stylesheet" href="css/common.css" />
  </head>
  <body>
    <?php require('inc/header.php');?>
    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">CONTACT US</h2>
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
        molestiae architecto odit <br />porro perferendis itaque error illo
        distinctio qui aspernatur.
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white p-4 rounded shadow">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d7146.9995604207925!2d80.34001249872938!3d26.40734378944842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjbCsDI0JzMyLjIiTiA4MMKwMjAnMzAuMSJF!5e0!3m2!1sen!2sin!4v1731504090400!5m2!1sen!2sin"
              height="320"
              style="border: 0"
              allowfullscreen=""
              class="w-100 rounded mb-4"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <h5>Address</h5>
            <i class="bi bi-geo-alt-fill"></i>
            <a
              href="https://maps.app.goo.gl/rq1HXMf9pB2eRYLx7"
              target="_blank"
              class="text-decoration-none d-inline-block text-dark mb-4"
              >XYZ, Kanpur, UP</a
            >
            <h5>Call us</h5>
            <a
              href="tel: +919140018098"
              class="d-inline-block mb-2 text-decoration-none text-dark"
              ><i class="bi bi-telephone-fill"></i> +919140018098</a
            >
            <br />
            <a
              href="tel: +919140018098"
              class="d-inline-block mb-2 text-decoration-none text-dark"
              ><i class="bi bi-telephone-fill"></i> +919140018098</a
            >
            <h5 class="mt-4">Email</h5>
            <a
              href="mailto:snehu0201@gmail.com"
              class="text-decoration-none d-inline-block text-dark"
              ><i class="bi bi-envelope-fill"></i> snehu0201@gmail.com</a
            >
            <h5 class="mt-4">Follow us</h5>
            <a
              href="#"
              class="d-inline-block text-decoration-none text-dark mb-3 fs-5 me-2"
            >
              <i class="bi bi-twitter-x me-1"></i
            ></a>
            <a
              href="#"
              class="d-inline-block text-decoration-none text-dark mb-3 fs-5 me-2"
            >
              <i class="bi bi-instagram me-1"></i
            ></a>
            <a
              href="#"
              class="d-inline-block text-decoration-none text-dark mb-3 fs-5"
            >
              <i class="bi bi-facebook me-1"></i
            ></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white p-4 rounded shadow">
            <form>
              <h5>Send a message</h5>
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500">Name </label>
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500"
                  >Email
                </label>
                <input type="email" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500"
                  >Subject
                </label>
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500"
                  >Message
                </label>
                <textarea
                  class="form-control shadow-none"
                  rows="5"
                  style="resize: none"
                ></textarea>
              </div>
              <button type="submit" class="btn text-white custom-bg mt-3">
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->
    <?php require('./inc/footer.php');?>
  </body>
</html>
