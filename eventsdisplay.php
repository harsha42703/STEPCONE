
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/eventdisplay.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">
    <title>Events</title>
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/footer.css">
        <link href="https://api.fontshare.com/v2/css?f[]=supreme@400&f[]=bespoke-stencil@700&display=swap" rel="stylesheet">
</head>
<body >
    <style>
        #eve{
           color:#fcd4ba;
       }
   </style>

<!-- <div class=" bg-dark text-white text-center rounded-5 p-3 m-2">
    <h2>spot events</h2>
</div> -->
<div class="contern" style="margin-top: 80px;"></div>
<?php 
       include('includes/navbar.php');
       ?>
<?php
$cards = array(
    array(
        'imageSrc' => 'assets/codigo.jpeg',
        'title' => 'webathon',
        'description' => 'weabthon by sarath',
        'link' => 'https://google.com'
    ),
    array(
        'imageSrc' => 'assets/codigo.jpeg',
        'title' => 'webathon',
        'description' => 'weabthon by sarath',
        'link' => 'https://google.com'
    ),
    array(
        'imageSrc' => 'assets/codigo.jpeg',
        'title' => 'webathon',
        'description' => 'weabthon by sarath',
        'link' => 'https://google.com'
    ),
    array(
        'imageSrc' => 'assets/codigo.jpeg',
        'title' => 'webathon',
        'description' => 'weabthon by sarath',
        'link' => 'https://google.com'
    ),
    array(
        'imageSrc' => 'assets/codigo.jpeg',
        'title' => 'webathon',
        'description' => 'weabthon by sarath',
        'link' => 'https://google.com'
    ),
    array(
        'imageSrc' => 'assets/codigo.jpeg',
        'title' => 'webathon',
        'description' => 'weabthon by sarath',
        'link' => 'https://google.com'
    ),
    array(
        'imageSrc' => 'assets/codigo.jpeg',
        'title' => 'webathon',
        'description' => 'weabthon by sarath',
        'link' => 'https://google.com'
    ),
    array(
        'imageSrc' => 'assets/codigo.jpeg',
        'title' => 'webathon',
        'description' => 'weabthon by sarath',
        'link' => 'https://google.com'
    ),
   
);
echo'<div class="containerdiv" style="padding-bottom: 40px;">';
 foreach($cards as $card)
 {
echo '<div class="d-flex flex-column justify-content-center align-items-center"> 
      <div   class="m-3 carditem rounded-4" 
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
            href="eventview.php"
            target="_self"
          >
            <i class="fa-solid fa-up-right-from-square bg-light text-dark"></i>
             </a>
        </div>
      </div>
      <div class="bg-dark p-2 titleheading text-center"><h5>webathon</h5></div>
    </div>';
 }
 echo '</div>';
 ?>
 <?php 
       include('includes/footer.php');
       ?>
       <script src="js/main.js"></script>
</body>
</html>
