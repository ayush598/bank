<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>APNA AUR SABKA BANK</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #7d8892;">
              
              <div class="col-sm-12 col-md img text-center">
                <img src="img/3.jpg" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  WEB BANK! You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/user.jpg" alt="Card image cap">
    <div class="card-body">
     <a href="createuser.php"><button style="background-color : #01080d;" style="border-radius:0%">Create an Account</button></a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/ruser.jpg" alt="Card image cap">
    <div class="card-body">
     <a href="removeuser.php"><button style="background-color : #01080d;" style="border-radius:0%">Delete an Account</button></a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/transfer.jpg" alt="Card image cap">
    <div class="card-body">
     <a href="transfermoney.php"><button style="background-color : #01080d;">Make a Transaction</button></a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/history.jpg" alt="Card image cap">
    <div class="card-body">
     <a href="transactionhistory.php"><button style="background-color : #01080d;">Transaction History</button></a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>



      <footer class="text-center mt-5 py-2">
      <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p> Terms & Conditions Do Not Call Registry Disclaimer Multilingual Disclaimer Code of Commitment Group Code of Business Conduct and Ethics Customer Service Policies Use of Unparliamentary Language by Customers Privacy USA Patriot Act Certification Fair Practice Code for Lenders</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2020 All rights reserved | made FOR
                <a href="https://www.linkedin.com/in/ayush-pandit-7630a91ba/" target="_black">The Sparks Foundation <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
        
</footer>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>