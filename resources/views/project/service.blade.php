@extends('layouts.front')
@section('content')
<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Seotech
          </span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="s-1"> </span>
          <span class="s-2"> </span>
          <span class="s-3"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html"> Services </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactLink">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container ">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : + 01 1234567890
              </span>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>


<!-- service section -->
<section class="service_section layout_padding">
  <div class="container-fluid">
    <div class="heading_container">
      <h2>
        Our Services
      </h2>
      <p>
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>

    <div class="service_container">
      <div class="box">
        <div class="img-box">
          <img src="images/s-1.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Brand Promotion
          </h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/s-2.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Video Marketing

          </h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/s-3.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Site Analysis
          </h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/s-4.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Social Media Marketing
          </h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/s-5.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            SEO Optimization
          </h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          </p>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        Read More
      </a>
    </div>
  </div>
</section>
<!-- end service section -->

<div class="footer_bg">

  <!-- contact section -->
  <section class="contact_section layout_padding" id="contactLink">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In touch
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="inputName4" placeholder="Name ">
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
              </div>

            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="text" class="form-control" id="inputSubject4" placeholder="Subject">
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="inputMessage" placeholder="Message">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->



  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <h3>
              Seotech
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor indidunt ut labore et
              dolore magna
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h4>
              BASIC LINKS
            </h4>
            <ul class="  ">
              <li class=" ">
                <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="">
                <a class="" href="about.html"> About</a>
              </li>
              <li class="active">
                <a class="" href="service.html"> Services </a>
              </li>
              <li class="">
                <a class="" href="#contactLink">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              CONTACT DETAILS
            </h4>
            <a href="">
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </a>
            <a href="">
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h4>
              NEWSLETTER
            </h4>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/info-fb.png" alt="">
              </a>
              <a href="">
                <img src="images/info-twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/info-linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/info-youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

@endsection
