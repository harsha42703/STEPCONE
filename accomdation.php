<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha256-q4W+Poq0RKOg2VV8hCYT/mzRMZl4PH3UU3HGtOCtkwM=" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link href="https://db.onlinewebfonts.com/c/7e96eba370659b4e4563309dc4ebb33f?family=Samarkan+Normal+V2" rel="stylesheet">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/accom.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="https://api.fontshare.com/v2/css?f[]=supreme@400&f[]=bespoke-stencil@700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
  <style>
     #acc{
            color:#fcd4ba;
        }

        .basic,.premium{
          /* border: solid 1px black; */
          padding: 20px;
          border-radius: 7px;
          background:url('assets/wback2.avif');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
          
        }
.main h1 span{
  font-size: 58px;
}

        
  </style>
<?php 
       include('includes/navbar.php');
       ?>
  <div class="acoomodation-container" style="margin-top: 90px;">
  <div class="accomodation">
    <div class="main">
      <h1 style="color: #3D3B40;" data-aos="fade-right"> 
        <span style="color: #525CEB;">G</span> 
        <span style="color: #FF004D;">M</span>
        <span style="color: #F6D776;">R</span>
        <span style="color: #FF004D;">I</span>
        <span style="color: #443157;">T</span><br>WELCOMES YOU...
      </h1>
    </div>
    <div class="image">
      <img src="assets/accom.png" data-aos="fade-left" alt="">
    </div>
  </div>

    <div class="content">
      <div class="basic" data-aos="zoom-out">
        <h1 style="color:#443157 ;" >Basic Registration</h1>
        <p style="color:#000000 ;">Access to STEPCONE kit along with lunch for two days.</p>
      </div>
      <div class="premium" data-aos="zoom-out">
        <h1 style="color:#443157 ;" >Premium Registration <img src="assets/accom1.png" alt="" width="65px" height="65px"></h1>
        <p style="color:#000000 ;">Access to STEPCONE kit along with accommodation for two days which includes break-fast, lunch and dinner.</p>
      </div>
    </div>
    <h1 class="h1" style="color: #3D3B40;">Contact Us</h1>
    <div class="contact-details">
      <div class="contact">
        <div class="card">
          <div class="card_border" data-aos="flip-left">
            <img src="assets/accomodation/1.jpg" alt="imgae" />
          </div>
      
          <h3 class="name">P.Devashish</h3>
          <span class="role">AIML</span>
      
          <div class="social_media">
            <div class="control">
              <div class="card-toggle">
                <a href="tel:+917702815516"><i class="fa-solid fa-phone"></i></a>
              </div>
      
              <span class="social-text">+91-8919474533</span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card_border" data-aos="flip-right">
            <img src="assets/accomodation/2.jpg" alt="imgae" />
          </div>
      
          <h3 class="name">E.Pranav Deep</h3>
          <span class="role">CSE</span>
      
          <div class="social_media">
            <div class="control">
              <div class="card-toggle">
                <a href="tel:+917702815516"><i class="fa-solid fa-phone"></i></a>
              </div>
      
              <span class="social-text">+91-9515721637</span>
            </div>
          </div>
        </div>
      </div>
      <div class="registration">
        <img data-aos="zoom-out" src="assets/Mobile-login-Cristina.jpg" alt="">
        <a class="btn " style="border:solid 1px #443157" href="">Register Now</a>
      </div>
    </div>
</div>
<script>
  AOS.init();
</script>
<?php 
       include('includes/footer.php');
       ?>
<script src="js/main.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>
</html>