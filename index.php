<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quantex</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="responsive.css" />
  </head>
  <body>
    <header class="row navbar">
      <ul class="navbar-left">
        <li>
          <div><img src="./assets/quantex-logo.png" alt="" /></div>
        </li>
      </ul>
      <ul class="row navbar-middle">
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <ul class="row navbar-right">
        <li class="call-us">
          <div>
            <a class="row color-green" href="">Call Us Now</a>
          </div>
        </li>
      </ul>
    </header>

    <div class="column banner">
      <div class="img-wrapper">
        <img src="./assets/banner.png" alt="" />
      </div>
      <div class="column text-wrapper">
        <h1>Quantity Surveyor in Sydney</h1>
        <p>Always aiming to provide high-quality, professional and efficient service. Always aiming to exceed clients’ expectations no matter what we do.</p>
        <div class="get-quote">
          <a class="" href="">Get a Quote</a>
        </div>
      </div>
    </div>

    <div class="row about" id="about">
      <div class="column left-side">
        <h2>About Quantex</h2>
        <p>
          Quantex Consulting provides a full range of Construction Cost Consultancy, Estimating & Tendering Services to the Construction Industry. <br /><br />
          Established in 2016, we have extensive experience in all aspects of the construction industry including residential, commercial and industrial sectors. We provide Quantity Surveying & Estimating Services to a wide variety of
          clients including developers, consultants, contractors and sub-contractors. <br /><br />
          At Quantex, we aim to provide a high quality, professional and efficient service, to exceed our clients’ expectations and be a valued partner in your project.
        </p>
        <div class="img-wrapper"><img src="./assets/AIQS-logo.png" alt="" /></div>
      </div>
      <div class="right-side">
        <div class="column form-wrapper">
          <div class="column text-wrapper">
            <h3>CONTACT US & GET YOUR QUOTE</h3>
            <p>Fill out the form below and we will get back to you as soon as possible to get started.</p>
          </div>
          <form action="" class="form column">
            <ul class="form-fields">
              <li>
                <img src="./assets/person-icon.png" alt="" />
                <input type="text" name="name" id="name" placeholder="Name" />
              </li>
              <li>
                <img src="./assets/phone-icon.png" alt="" />
                <input type="text" name="number" id="number" placeholder="Number" />
              </li>
              <li>
                <img src="./assets/email-icon.png" alt="" />
                <input type="text" name="email" id="email" placeholder="Email" />
              </li>
              <li>
                <div class="img-wrapper row">
                  <img src="./assets/message-icon.png" alt="" />
                </div>
                <textarea type="text" name="message" rows="6" cols="20" placeholder="Message"></textarea>
              </li>
            </ul>
            <div class="row submit-btn">
              <input type="submit" value="SUBMIT" />
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="services" id="services">
      <div class="column title">
        <h2>Our Services</h2>
        <p>We cover end-to-end services to our clients. We are the one-stop shop solution you have been looking for.</p>
      </div>
      <div class="column left-side planning">
        <div class="img-card" style="background-image: url('./assets/planning.png')"></div>
        <h3>Planning & Development Stage</h3>
        <ul>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/budget.png" alt="" /></div>
            <div class="column">
              <h4>Conceptual Cost Estimates</h4>
              <h5>High level cost estimates prepared without the need for developed site specific documentation.</h5>
            </div>
          </li>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/sketch.png" alt="" /></div>
            <div class="column">
              <h4>Cost of Design Alternatives</h4>
              <h5>Cost Comparison of two or more concepts to find or amend the design that fits within your budget.</h5>
            </div>
          </li>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/research.png" alt="" /></div>
            <div class="column">
              <h4>Feasibility Studies</h4>
              <h5>Forecast all aspects of your project including acquisition, program, design, construction and income; to determine the return of your investment.</h5>
            </div>
          </li>
        </ul>
      </div>
      <div class="column right-side finance">
        <div class="img-card" style="background-image: url('./assets/finance.png')"></div>
        <h3>Pre Construction & Finance</h3>
        <ul>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/city-council.png" alt="" /></div>
            <div class="column">
              <h4>Council DA Cost Reports</h4>
              <h5>Review DA documentation and prepare a Cost Report to form part of your submission to Council.</h5>
            </div>
          </li>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/clipboard.png" alt="" /></div>
            <div class="column">
              <h4>Detailed Cost Estimates & BOQ</h4>
              <h5>Measure developed ‘CC/IFC’ documentation to create an accurate cost estimate to assist in budgeting, finance forecasts and head contract tender assessments.</h5>
            </div>
          </li>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/business-report.png" alt="" /></div>
            <div class="column">
              <h4>Pre Construction Financial Report</h4>
              <h5>Advise your financier on Construction Cost and Risk associated with your development, predominantly prepared accompanying a Detailed Cost Estimate.</h5>
            </div>
          </li>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/contract.png" alt="" /></div>
            <div class="column">
              <h4>Trade / Subcontract Measure and Cost Estimates</h4>
              <h5>Detailed Trade Level take off of quantities of individual trades. Useful for the Subcontractor when tendering or a Head Contractor to assess tenders.</h5>
            </div>
          </li>
        </ul>
      </div>
      <div class="column left-side construction-stage">
        <div class="img-card" style="background-image: url('./assets/construction.png')"></div>
        <h3>Construction Stage</h3>
        <ul>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/work-in-progress.png" alt="" /></div>
            <div class="column">
              <h4>Progress Claim Assessments</h4>
              <h5>Assess the cost of works completed on site at regular or ad-hoc intervals. Include findings in a detailed report and advise on program, changes and cost to complete.</h5>
            </div>
          </li>
          <li class="row">
            <div class="img-wrapper"><img src="./assets/change.png" alt="" /></div>
            <div class="column">
              <h4>Track changes / Variation Assessments</h4>
              <h5>Validate and assess the cost of latent conditions or client requested changes.</h5>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="column projects" id="projects">
      <div class="column title">
        <h2>Our Projects</h2>
        <p>Our experience speaks for itself, see a wide range of projects we have successfully completed so far.</p>
      </div>
      <div class="swiper projectSwiper row">
        <div class="grid swiper-wrapper">
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/mascot.jpeg')"></div>
            <h5>Mascot</h5>
            <h6>$45M+</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/lidcombe.jpeg')"></div>
            <h5>Lidcombe</h5>
            <h6>$100M+</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/sydney-pool.jpeg')"></div>
            <h5>Sydney Hotel Pool</h5>
            <h6>$80K Fitout</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/mascott-lobby.jpeg')"></div>
            <h5>Mascot Residential Lobby</h5>
            <h6>$300K Fitout</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/dundas.jpeg')"></div>
            <h5>Dundas</h5>
            <h6>$900K</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/parramatta.jpeg')"></div>
            <h5>Parramatta</h5>
            <h6>$300M+</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/dundas3.jpeg')"></div>
            <h5>Dundas</h5>
            <h6>$900K</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/dundas2.jpeg')"></div>
            <h5>Dundas</h5>
            <h6>$900K</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/toongabbe.jpeg')"></div>
            <h5>Toongabbie</h5>
            <h6></h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/toongabbie2.jpeg')"></div>
            <h5>Toongabbie</h5>
            <h6></h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/pendle-hill.jpeg')"></div>
            <h5>Pendlle Hill</h5>
            <h6></h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/pendle-hill2.jpeg')"></div>
            <h5>Pendlle Hill</h5>
            <h6></h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/mascot.jpeg')"></div>
            <h5>Mascot</h5>
            <h6>$45M+</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/lidcombe.jpeg')"></div>
            <h5>Lidcombe</h5>
            <h6>$100M+</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/parramatta.jpeg')"></div>
            <h5>Parramatta</h5>
            <h6>$300M+</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/zetland.jpeg')"></div>
            <h5>Zetland</h5>
            <h6>224 Units - $90M+</h6>
          </div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/lewisham.jpeg')"></div>
            <h5>Lewisham</h5>
            <h6>300 Units - $100M+</h6>
          </div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/pendle-hill3.jpeg')"></div>
            <h5>Pendle Hill</h5>
            <h6></h6>
          </div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide">
            <div class="img-wrapper" style="background-image: url('./assets/childcare.jpeg')"></div>
            <h5>Childcare</h5>
            <h6>200 Places - $3.5M</h6>
          </div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
          <div class="card column swiper-slide"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <div class="column reviews" id="reviews">
      <div class="column title">
        <h2>Our Reviews</h2>
        <p>See what our clients have to say about our services. Ensure that you are going to be in good hands with Quantex.</p>
      </div>
      <div class="swiper-button-next"><img src="./assets/arrow-right.png" alt="" /></div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide column card">
            <div class="column cardd">
              <div class="img-wrapper"><img src="./assets/rate.png" alt="" /></div>
              <h6>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac."</h6>
              <h5>Client Name</h5>
            </div>
          </div>
          <div class="swiper-slide column card">
            <div class="column cardd">
              <div class="img-wrapper"><img src="./assets/rate.png" alt="" /></div>
              <h6>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac."</h6>
              <h5>Client Name</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev"><img src="./assets/arrow-left.png" alt="" /></div>
    </div>

    <footer class="column" id="contact">
      <div class="row top-footer">
        <ul class="navbar-left">
          <li>
            <div><img src="./assets/quantex-logo.png" alt="" /></div>
          </li>
        </ul>
        <ul class="row navbar-middle">
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="row social-profile">
          <li>
            <a href=""><img src="./assets/instagram-logo.png" alt="" /></a>
          </li>
          <li>
            <a href=""><img src="./assets/linkedin-logo.png" alt="" /></a>
          </li>
          <li>
            <a href=""><img src="./assets/facebook-logo.png" alt="" /></a>
          </li>
        </ul>
      </div>
      <div>
        <h6>© 2022 Quantex Consulting. All Rights Reserved.</h6>
      </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
      var swiper1 = new Swiper(".mySwiper", {
        slidesPerView: 1,
        slidesPerGroup: 1,
        breakpoints: {
          767: {
            slidesPerView: 2,
            slidesPerGroup: 2,
          },
        },
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      const projects = [
        "Trade/<br>Subcontract BOQ",
        "Low Density<br>(Houses & Duplex)",
        "High Density &<br>Mixed Use<br>(Units & Commercial)",
        "Alterations &<br>Additions",
        "Childcare<br>Centres",
        "Medium Density<br>(Townhouses & Villas)",
      ];

      var swiper2 = new Swiper(".projectSwiper", {
        slidesPerView: 2,
        slidesPerColumn: 2,
        slidesPerGroup: 2,
        grid: {
          rows: 3,
        },
        // direction: "horizontal",
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + '<p class="text-wrapper">' + projects[index] + "</p>" + "</span>";
          },
        },
        breakpoints: {
          1025: {
            slidesPerView: 2,
            slidesPerColumn: 2,
            slidesPerGroup: 2,
            grid: {
              rows: 3,
            },
            direction: "vertical",
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
              renderBullet: function (index, className) {
                return '<span class="' + className + '">' + '<p class="text-wrapper">' + projects[index] + "</p>" + "</span>";
              },
            },
          },
        },
        breakpoints: {
          767: {
            slidesPerView: 3,
            slidesPerColumn: 3,
            slidesPerGroup: 3,
            grid: {
              rows: 2,
            },
            direction: "vertical",
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
              renderBullet: function (index, className) {
                return '<span class="' + className + '">' + '<p class="text-wrapper">' + projects[index] + "</p>" + "</span>";
              },
            },
          },
        },
      });
    </script>
  </body>
</html>
