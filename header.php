<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property List - GET YOUR DREAM HOUSE</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>




  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Property List</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Contact.php" onclick=f1()>Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="houseRentPage.php">Rent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="cursor: pointer;" onclick="showModal()">Login</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End Navbar  -->

  <!-- Start Login and signup Form  -->
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
    <!-- End Login and signup Form  -->