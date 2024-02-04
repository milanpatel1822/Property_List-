<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property List - GET YOUR DREAM HOUSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
   

</head>

<body>




  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar" style="background-color: #232323;">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="index.php">Property List</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="houseRentPage.php">Rent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" style="cursor: pointer;" onclick="showModal()">Login</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End Navbar  -->

  <!-- Start Login and signup Form  -->
  <div class="overLay"></div>
  <div class="wrapper-form">
  <section class="wrapper">
      <div class="form signup">
        <span class="cancle" onclick="removeModal()">X</span>
        <header>Signup</header>
        <form action="#">
          <input type="text" placeholder="Full name" required />
          <input type="text" placeholder="Email address" required />
          <input type="password" placeholder="Password" required />
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <input type="submit" value="Signup" />
        </form>
      </div>

      <div class="form login">
        <header>Login</header>
        <form action="#">
          <input type="text" placeholder="Email address" required />
          <input type="password" placeholder="Password" required />
          <a href="#">Forgot password?</a>
          <input type="submit" value="Login" />
        </form>
      </div>
    </section>
  </div>
    <!-- End Login and signup Form  -->



    
