
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/eventdisplay.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Events</title>
    <link href="https://db.onlinewebfonts.com/c/7e96eba370659b4e4563309dc4ebb33f?family=Samarkan+Normal+V2" rel="stylesheet">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/footer.css">
        <link href="https://api.fontshare.com/v2/css?f[]=supreme@400&f[]=bespoke-stencil@700&display=swap" rel="stylesheet">
</head><link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<body >
    <style>
        #eve{
           color:#fcd4ba;
       }
       body{
        background-color:  rgba(245, 245, 245, 0.988);
       }
   </style>

<!-- <div class=" bg-dark text-white text-center rounded-5 p-3 m-2">
    <h2>spot events</h2>
</div> -->
<div class="contern" style="margin-top: 90px; "></div>
<?php 
       include('includes/navbar.php');
       ?>
<?php
$cse = array(
    array(
        'imageSrc' => 'events/technical/CSE,AIML,AIDS/CODE WARS/Code Wars(CSE,AIML,AIDS).png',
        'title' => 'CODE WARS',
        'description' => '',
        'link' => 'tech-cse1.php'
    ),
    array(
        'imageSrc' => 'events/technical/CSE,AIML,AIDS/DAT VIZ/Data Viz(CSE,AIML,AIDS).png',
        'title' => 'DATA VIZ',
        'description' => '',
        'link' => 'tech-cse2.php'
    ),
   
);
$ece = array(
    array(
        'imageSrc' => 'events/technical/ECE/CIRCUIT DEBUGGING/CIRCUIT DEBUGGING(ECE).png',
        'title' => 'CIRCUIT DEBUGGING',
        'description' => '',
        'link' => 'tech-ece1.php'
    ),
    array(
        'imageSrc' => 'events/technical/ECE/TINKER CAD/TINKER CAD(ECE).png',
        'title' => 'TINKER CAD',
        'description' => '',
        'link' => 'tech-ece2.php'
    ),
    
);
$it = array(
    array(
        'imageSrc' => 'events/technical/IT/APP DEV/APP DEV (IT).jpg',
        'title' => 'APP DEV: A CHALLENGING SPIRIT',
        'description' => '',
        'link' => 'tech-it1.php'
    ),
    array(
        'imageSrc' => 'events/technical/IT/GAME CRAFTERS/GAME CRAFTERS (IT).jpg',
        'title' => 'GAME CRAFTERS',
        'description' => '',
        'link' => 'tech-it2.php'
    ),
    
);
$mech = array(
    array(
        'imageSrc' => 'events/technical/ME/YANTRA YOCHANA/YANTRA YOCHANA.png',
        'title' => 'YANTRA YOCHANA',
        'description' => '',
        'link' => 'tech-me1.php'
    ),
    array(
        'imageSrc' => 'events/technical/ME/WATER ROCKETRY/WATER ROCKETRY.png',
        'title' => 'WATER ROCKETRY',
        'description' => '',
        'link' => 'tech-me2.php'
    ),
    
);
$eee= array(
    array(
        'imageSrc' => 'events/technical/EEE/BYTE FLOW INTEGRATION/BYTE FLOW INTEGRATION.png',
        'title' => 'BYTE FLOW INTEGRATION',
        'description' => '',
        'link' => 'tech-eee1.php'
    ),
    array(
        'imageSrc' => 'events/technical/EEE/LED/Let enlight the dark(LED)(EEE).png',
        'title' => 'LED (LETS ENLIGHT THE DARK)',
        'description' => '',
        'link' => 'tech-eee2.php'
    ),
    
);
$civil= array(
    array(
        'imageSrc' => 'events/technical/CE/MARVEL MODELLING/MARVEL MODELLING.png',
        'title' => 'MARVEL MODELLING',
        'description' => '',
        'link' => 'tech-ce1.php'
    ),
   
);
?>

<h1 class="text-center" style="background-color: whitesmoke;" >CSE/AI-DS/AI-ML</h1> 
<?php
echo'<div class="containerdiv" style="padding-bottom: 40px; background:url(assets/wback5.avif); background-position: center; background-repeat: no-repeat; background-size: cover; ">';
 
foreach($cse as $card)
 {
echo '<div class="d-flex flex-column justify-content-between align-items-center " > 
      <div   class="m-3 carditem rounded-1" data-aos="zoom-out" 
            style= "width: 320px;height: 220px; ">
        <img
          class="rounded-3"
          src=" ' . $card['imageSrc'] .'"
          alt="event image"
          width="320px"
          height="220px"
        />
        <div class="carddetails">
          <p class="fw-bold text-white bg-transparent"> ' . $card['title'] . '</p>
          <p class="bg-transparent text-white">' . $card['description'] . '</p>
          <a
            class="btn btn-light rounded-5"
            href="events/'.$card['link'].'"
            target="_self"
          >
            <i class="fa-solid fa-up-right-from-square bg-light text-dark"></i>
             </a>
        </div>
      </div>
      <div class=" p-2 text-center text-white" style="font-size:35px;"><h5>'.$card['title'].'</h5></div>
    </div>';
 }
 echo '</div>';
 ?>

<h1 class="text-center" style="">INFORMATION TECHNOLOGY</h1>
<?php
echo'<div class="containerdiv" style="padding-bottom: 40px; background:url(assets/wback5.avif); background-position: center; background-repeat: no-repeat; background-size: cover;">';
 foreach($it as $card)
 {
echo '<div class="d-flex flex-column justify-content-center align-items-center"> 
      <div   class="m-3 carditem rounded-1" data-aos="zoom-out" 
            style= "width: 320px;height: 220px; ">
        <img
          class="rounded-3"
          src=" ' . $card['imageSrc'] .'"
          alt="event image"
          width="320px"
          height="220px"
        />
        <div class="carddetails">
          <p class="fw-bold text-white bg-transparent"> ' . $card['title'] . '</p>
          <p class="bg-transparent text-white">' . $card['description'] . '</p>
          <a
            class="btn btn-light rounded-5"
            href="events/'.$card['link'].'"
            target="_self"
          >
            <i class="fa-solid fa-up-right-from-square bg-light text-dark"></i>
             </a>
        </div>
      </div>
      <div class=" p-2 text-center text-white" style=";font-size:35px;"><h5>'.$card['title'].'</h5></div>
    </div>';
 }
 echo '</div>';
 ?>


<h1 class="text-center">ELECTRONICS & COMMUNICATION ENGINEERING</h1>
<?php
echo'<div class="containerdiv" style="padding-bottom: 40px; background:url(assets/wback5.avif); background-position: center; background-repeat: no-repeat; background-size: cover;">';
 foreach($ece as $card)
 {
echo '<div class="d-flex flex-column justify-content-center align-items-center"> 
      <div   class="m-3 carditem rounded-1" data-aos="zoom-out" 
            style= "width: 320px;height: 220px; ">
        <img
          class="rounded-3"
          src=" ' . $card['imageSrc'] .'"
          alt="event image"
          width="320px"
          height="220px"
        />
        <div class="carddetails">
          <p class="fw-bold text-white bg-transparent"> ' . $card['title'] . '</p>
          <p class="bg-transparent text-white">' . $card['description'] . '</p>
          <a
            class="btn btn-light rounded-5"
            href="events/'.$card['link'].'"
            target="_self"
          >
            <i class="fa-solid fa-up-right-from-square bg-light text-dark"></i>
             </a>
        </div>
      </div>
      <div class=" p-2 text-center text-white" style="font-size:35px;"><h5>'.$card['title'].'</h5></div>
    </div>';
 }
 echo '</div>';
 ?>


<h1 class="text-center">MECHANICAL ENGINEERING</h1>
<?php
echo'<div class="containerdiv" style="padding-bottom: 40px;background:url(assets/wback5.avif); background-position: center; background-repeat: no-repeat; background-size: cover;">';
 foreach($mech as $card)
 {
echo '<div class="d-flex flex-column justify-content-center align-items-center"> 
      <div   class="m-3 carditem rounded-1" data-aos="zoom-out" 
            style= "width: 320px;height: 220px; ">
        <img
          class="rounded-3"
          src=" ' . $card['imageSrc'] .'"
          alt="event image"
          width="320px"
          height="220px"
        />
        <div class="carddetails">
          <p class="fw-bold text-white bg-transparent"> ' . $card['title'] . '</p>
          <p class="bg-transparent text-white">' . $card['description'] . '</p>
          <a
            class="btn btn-light rounded-5"
            href="events/'.$card['link'].'"
            target="_self"
          >
            <i class="fa-solid fa-up-right-from-square bg-light text-dark"></i>
             </a>
        </div>
      </div>
      <div class=" p-2 text-center text-white" style="font-size:35px;"><h5>'.$card['title'].'</h5></div>
    </div>';
 }
 echo '</div>';
 ?>



<h1 class="text-center">CIVIL ENGINEERING</h1>
<?php
echo'<div class="containerdiv" style="padding-bottom: 40px; background:url(assets/wback5.avif); background-position: center; background-repeat: no-repeat; background-size: cover;">';
 foreach($civil as $card)
 {
echo '<div class="d-flex flex-column justify-content-center align-items-center"> 
      <div   class="m-3 carditem rounded-1" data-aos="zoom-out" 
            style= "width: 320px;height: 220px; ">
        <img
          class="rounded-3"
          src=" ' . $card['imageSrc'] .'"
          alt="event image"
          width="320px"
          height="220px"
        />
        <div class="carddetails">
          <p class="fw-bold text-white bg-transparent"> ' . $card['title'] . '</p>
          <p class="bg-transparent text-white">' . $card['description'] . '</p>
          <a
            class="btn btn-light rounded-5"
            href="events/'.$card['link'].'"
            target="_self"
          >
            <i class="fa-solid fa-up-right-from-square bg-light text-dark"></i>
             </a>
        </div>
      </div>
      <div class=" p-2 text-center text-white" style="font-size:35px;"><h5>'.$card['title'].'</h5></div>
    </div>';
 }
 echo '</div>';
 ?>



<h1 class="text-center">ELECTRICAL & ELECTRONICS ENGINEERING</h1>
<?php
echo'<div class="containerdiv" style="padding-bottom: 40px; background:url(assets/wback5.avif); background-position: center; background-repeat: no-repeat; background-size: cover;">';
 foreach($eee as $card)
 {
echo '<div class="d-flex flex-column justify-content-center align-items-center"> 
      <div   class="m-3 carditem rounded-1" data-aos="zoom-out" 
            style= "width: 320px;height: 220px; ">
        <img
          class="rounded-3"
          src=" ' . $card['imageSrc'] .'"
          alt="event image"
          width="320px"
          height="220px"
        />
        <div class="carddetails">
          <p class="fw-bold text-white bg-transparent"> ' . $card['title'] . '</p>
          <p class="bg-transparent text-white">' . $card['description'] . '</p>
          <a
            class="btn btn-light rounded-5"
            href="events/'.$card['link'].'"
            target="_self"
          >
            <i class="fa-solid fa-up-right-from-square bg-light text-dark"></i>
             </a>
        </div>
      </div>
      <div class=" p-2 text-center text-white" style="color:font-size:35px;"><h5>'.$card['title'].'</h5></div>
    </div>';
 }
 echo '</div>';
 ?>w


 <?php 
       include('includes/footer.php');
       ?>

       <script>
        AOS.init();
      </script>
       <script src="js/main.js"></script>
</body>
</html>
