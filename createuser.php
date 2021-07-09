<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color : #ececec;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,gender,balance) values('{$name}','{$email}','{$gender}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User has been created!');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4" style="color : #090b0e;;">Create an Account</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user3.webp" style="border: none; border-radius: 10%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="ENTER FULLNAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="ENTER EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <select name="gender" class="app-form-control" type="text" required>
                <option selected>SELECT GENDER </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="YOUR INITIAL BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="form-group form-check">
    <input type="checkbox"  class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Creating an account means you're okay with our Terms and Conditions and our Privacy Policy.</label>
  </div>
            <div class="app-form-group button">
              <input class="app-form-button" style="color:#000000;" type="submit" value="CREATE USER" name="submit"></input>
              <input class="app-form-button" style="color:#000000;" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>

          

        </div>
      </div>
    </div>
  </div>
</div>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  WEB BANK! Creating an account means you're okay with our Terms and Conditions and our Privacy Policy.</label>
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
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
                Copyright ©2021 All rights reserved | made FOR
                <a href="https://www.linkedin.com/in/ayush-pandit-7630a91ba/" target="_black">The Sparks Foundation <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
        
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>