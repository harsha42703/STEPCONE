
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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
<div class="contern" style="margin-top: 70px;  "></div>
<?php 
       include('includes/navbar.php');
       ?>
<?php
$cards = array(
    array(
        'imageSrc' => 'events/posters/paper-presentation.jpg',
        'title' => 'Technical Paper Presentation',
        'description' => '',
        'link' => 'paper-presentation.php'
    ),
    array(
        'imageSrc' => 'events/posters/project-exhibition.jpg',
        'title' => 'Project Exhibition Contest',
        'description' => '',
        'link' => 'project-exhibition.php'
    ),
    array(
        'imageSrc' => 'events/posters/startup-idea.jpg',
        'title' => 'Startup Idea Contest',
        'description' => '',
        'link' => 'startup-idea.php'
    ),
    array(
        'imageSrc' => 'events/posters/league.jpg',
        'title' => 'Gmrit Cricket Carnival',
        'description' => '',
        'link' => 'league.php'
    ),
    
   
);
echo'<div class="containerdiv" style="padding-bottom: 40px; background:url(assets/wback5.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; padding-top: 50px;">';
 foreach($cards as $card)
 {
echo '<div class="d-flex flex-column justify-content-center align-items-center"> 
      <div   class="m-3 carditem rounded-1" data-aos="zoom-in"
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
      <div class=" p-2 text-center" style="color:#441357;font-size:35px;"><h5>'.$card['title'].'</h5></div>
    </div>';
 }
 echo '</div>';
 ?>
 <?php 
       include('includes/footer.php');
       ?>
       <script>
        AOS.init();
      </script>
       <script src="js/main.js"></script>
</body>
</html>
