<?php
include('header.php');
?>





<!-- Start img slider-->

<div id="carouselExampleCaptions" class="carousel slide carousel-inner " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg1.jpg" class="d-block w-100" id="imgs" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bg2.jpg" class="d-block w-100" id="imgs" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bg3.jpg" class="d-block w-100" id="imgs" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="notification">
  <p>Welcome Sir,</p>
  <span class="notification_program"></span>
</div>
<!-- Welcome PopUp notification  -->

<!-- About Us  -->
<section class="About d-flex mt-5 align-items-center main">
    <div class="left ms-5">
        <img src="img/about-img.jpg" class="rounded" alt="About Us">
    </div>
    <div class="right ms-3 main">
        <h1 class="text-center">About Us</h1>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident impedit, repellendus ut ratione eos tempore amet. Modi excepturi atque exercitationem quae nisi iusto nobis non voluptatum ipsum molestiae aliquid eos eum, earum, enim repellat quas?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque fugit magnam ipsam eligendi commodi aliquam. Velit, laborum rerum minus repellat nemo harum ratione.

    </div>
</section>

<section class="client-proj d-flex main">
    <div class="client">
        <img src="assets/client.svg" alt="">
        <h2 class="c2">Clients</h2>
    </div>
    <div class="Deals">
        <img src="assets/deals.svg" alt="">
        <h2 class="c2">Deals</h2>
    </div>
    <div class="Agents">
        <img src="assets/agent.svg" alt="">
        <h2 class="c2">Agents</h2>
    </div>
</section>

<!-- Property Cards Start -->
<div class="container mt-5 ms-5 main">
    <h2 class="text-center txt-head mt-3" id="Property">Property</h2>
    <div class="row d-flex">
        <div class="col-lg-3 col-md-6 text-center mt-3">
            <div class="card card-style1 border" style="width: 18rem;">
                <img src="img/bg.jpg" class="card-img-top image" alt="...">
                <div class="middle">
                    <h5 class="card-title text-center">Buy Property</h5>
                    <a href="#"><button class="btn-del btn-outline-success">See Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-3">
            <div class="card card-style1 border" style="width: 18rem;">
                <img src="img/bg.jpg" class="card-img-top image" alt="...">
                <div class="middle">
                    <h5 class="card-title text-center">Rent</h5>
                    <a href="#"><button class="btn-del btn-outline-success">See Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-3">
            <div class="card card-style1 border" style="width: 18rem;">
                <img src="img/bg.jpg" class="card-img-top image" alt="...">
                <div class="middle">
                    <h5 class="card-title text-center">PG</h5>
                    <a href="#"><button class="btn-del btn-outline-success">See Details</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-3">
            <div class="card card-style1 border" style="width: 18rem;">
                <img src="img/bg.jpg" class="card-img-top image" alt="...">
                <div class="middle">
                    <h5 class="card-title text-center">Sell Your Property</h5>
                    <a href="#"><button class="btn-del btn-outline-success">See Details</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property Cards Ends -->

<!-- Propery Services Start -->
<div class="container mt-5 ms-5 main">
    <h2 class="text-center txt-head mt-3" id="Property">Our Property Services</h2>
    <div class="row d-flex">
        <div class="col-lg-3 col-md-6 text-center mt-3 ms-5">
            <div class="card border card-style2" style="width: 18rem;">
                <img src="img/bg.jpg" class="card-img-top image" alt="...">
                <h4>Packers & Movers</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut fuga, quos deleniti libero odio labore.</p>
                <a href="#"><button class="btn-del btn-success mb-2">See Details</button></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-3">
            <div class="card border card-style2" style="width: 18rem;">
                <img src="img/bg.jpg" class="card-img-top image" alt="...">
                <h4>Home Lons </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non neque accusamus molestias officia cum id</p>
                <a href="#"><button class="btn-del btn-success mb-2">See Details</button></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-3">
            <div class="card border card-style2" style="width: 18rem;">
                <img src="img/bg.jpg" class="card-img-top image" alt="...">
                <h4>Home Interious</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit temporibus impedit sit eligendi cum explicabo.</p>
                <a href="#"><button class="btn-del btn-success mb-2">See Details</button></a>
            </div>
        </div>
    </div>
</div>

<!-- Propery Services Ends -->

<!-- Contact Us Start  -->
    <div class="main contact">
        <div class="container mt-5 sub-Contact">
            <h1 class="text-center txt-head" id="Contact">Contact Us</h1>
            <input class="contact-input" type="text" placeholder="Enter Your Name">
            <input class="contact-input" type="email" placeholder="Enter Your Email ID">
            <input class="contact-input" type="number" placeholder="Enter Your Phone No.">
            <textarea class="contact-textarea" name="View" id="view" cols="30" rows="10" placeholder="Enter Your Review"></textarea>
            <button class="text-center btn btn-success mt-3">Submit</button>
        </div>
    </div>
<!-- Contact Us Ends  -->
<?php
include('footer.php');
?>