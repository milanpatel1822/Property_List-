<?php
include('header.php');
?>
<div class="overLay"></div>

<section>
    <div class="form-structor">
        <span class="cancle" onclick="removeModal()">X </span>
        <div class="signup slide-up">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <div class="form-holder">
                <input type="text" class="input" placeholder="Name" />
                <input type="email" class="input" placeholder="Email" />
                <input type="tel" class="input" placeholder="Contact No" />
                <input type="password" class="input" placeholder="Password" />
            </div>
            <button class="submit-btn">Sign up</button>
        </div>
        <div class="login ">
            <div class="center">
                <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                <div class="form-holder">
                    <input type="email" class="input" placeholder="Email" />
                    <input type="password" class="input" placeholder="Password" />
                </div>
                <button class="submit-btn">Log in</button>
            </div>
        </div>
    </div>
</section>

<!-- Welcome PopUp notification  -->
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