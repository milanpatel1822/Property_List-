<?php include("header.php") ?>
<div class="container-fluid card text-center ">
    <div class="card-header d-flex">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="houseRentPage.php">Homes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="flatRentPage.php">Flat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-disabled="true" href="land-plotRentPage.php">Lands/Plots</a>
            </li>
        </ul>
        <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    <div class="card-body ">
        <div class="row">
            <div class="col-9 border">
                <div class="container mt-3 mb-5">
                    <div class="d-flex row">
                        <div class="col-md-12">
                            <div class="row p-2 bg-white border rounded">
                                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image image-height"
                                        src="img/house-1.jpg"></div>
                                <div class="col-md-6 mt-1">
                                    <h5>Houses</h5>
                                    <div class="mt-1 mb-1 text-start">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Project Size : 7200 Sq-yrd</li>
                                            <li class="list-group-item">4BHK</li>
                                            <li class="list-group-item">Parking Slot</li>
                                            <li class="list-group-item">Unique design</li>
                                            <li class="list-group-item">Home Interior</li>
                                        </ul>
                                    </div>
                                    <!-- <p class="text-justify text-truncate para mb-0">There are many variations of
                                        passages of Lorem Ipsum available, but the majority have suffered alteration in
                                        some form, by injected humour, or randomised words which don't look even
                                        slightly believable.<br><br></p> -->
                                </div>
                                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                    <div class="d-flex flex-row align-items-center">
                                        <h4 class="mr-1">45.5 Lakh</h4>
                                    </div>
                                    <div class="d-flex flex-column mt-4">
                                        <button class="btn btn-primary btn-sm" type="button"><a
                                                href="UserProductPage.php"
                                                class="text-white text-decoration-none">Details</a>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Buy</button>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 border"></div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php' ?>