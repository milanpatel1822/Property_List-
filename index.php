<?php
include('header.php');
?>
<div class="overLay"></div>


<section class="background firstsection">
    <div class="box-main">
        <div class="firsthalf">
            <p class="text-big">
                Your <I>Dream </I> House
            </p>
            <p class="text-small">
                It is tangible,it's solid ,it's beautiful.It is artistic,<br>from my standpoint, and I just love
                real estate.
            </p>
            <div class="buttons">
                <button class="btn" onclick="showModal()">LogIn</button>
            </div>
        </div>

        <div class="secondhalf">
            <img src="img/bg.jpg" alt="laptop">
        </div>
    </div>

</section>

<div class="card-head" value="Service">
    <div class="heading option-heading">
        <h3>Sell & Rent House</h3>
    </div>
    <div class="card-container">
        <div class="card-item">
            <img src="img/bg.jpg" alt="">
            <p class="card-text">Loremipsum.</p>
        </div>
        <div class="card-item">
            <img src="img/bg.jpg" alt="">
        </div>
        <div class="card-item">
            <img src="img/bg.jpg" alt="">
        </div>
        <div class="card-item">
            <img src="img/bg.jpg" alt="">
        </div>
    </div>
</div>

<div class="card-shops">
    <div class="heading option-heading">
        <h3>Shops Suitable for your Business</h3>
    </div>
    <div class="card-shop-container">
        <div class="card-shop-item">
            <img src="img/bg.jpg" alt="images">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, blanditiis?</p>
        </div>
    </div>
    <div class="card-shop-container">
        <div class="card-shop-item">
            <img src="img/bg.jpg" alt="images">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, blanditiis?</p>
        </div>
    </div>
    <div class="card-shop-container">
        <div class="card-shop-item">
            <img src="img/bg.jpg" alt="images">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, blanditiis?</p>
        </div>
    </div>


</div>

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



<script src="js/script.js"></script>

</body>

</html>