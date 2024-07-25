<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/registration.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://db.onlinewebfonts.com/c/7e96eba370659b4e4563309dc4ebb33f?family=Samarkan+Normal+V2" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=supreme@400&f[]=bespoke-stencil@700&display=swap" rel="stylesheet">
  </head>
  <body>
    <style>
      #rge{
            color:#fcd4ba;
        }
    </style>
    <?php 
       include('includes/navbar.php');
       ?>
    
    <div class="buttons" style="margin-top: 70px;">
      <a href="#" id="first" class="btn   custom-btn d-sm" style="color: #443157; background: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">How To Register <i class="fa-solid fa-download"></i></a>
      <a href="#" id="second" class="btn   dropdown-toggle  custom-btn" style="color: #443157; background: white;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;" data-bs-toggle="dropdown" aria-expanded="false">Basic Registration</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item " style="color: #443157;" href="#">GMRIT STUDENT</a></li>
        <li><a class="dropdown-item " style="color: #443157;" href="#">NON-GMRIT STUDENT</a></li>
      </ul>
      <a href="#" id="second" class="btn   custom-btn" style="color: #443157; background: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">Event Registration</a>
    </div>
    <div class="scrollable-table">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">TYPE OF EVENT</th>
            <th scope="col">NAME OF THE EVENT</th>
            <th scope="col">OFFERED BY</th>
            <th scope="col">REGISTRATION FEE</th>
            <th scope="col">TEAM/INDIVIDUAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="1">1</td>
            <td>BASIC REGISTRATION</td>
            <td class="left-align">
              TECHNICAL PAPER PRESENTATION + STEPCONE KIT + (LUNCH FOR 2 DAYS)
            </td>
            <td>CENTRAL</td>
            <td>RS.600</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
          <td rowspan="1">2</td>
            <td>PREMIUM REGISTRATION</td>
            <td class="left-align">
              TECHNICAL PAPER PRESENTATION + STEPCONE KIT + (BREAKFAST + LUNCH+
              DINNER+ ACCOMMODATION FOR 2 DAYS)
            </td>
            <td>CENTRAL</td>
            <td>RS.1000</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>3</td>
            <td rowspan="8" style="vertical-align: middle; text-align: left">
              WORKSHOPS
            </td>
            <td class="left-align">AIML APPLICATIONS IN CIVIL ENGG.</td>
            <td>CIVIL</td>
            <td>RS.200</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>4</td>
            <td class="left-align">3D PRINTING</td>
            <td>MECH</td>
            <td>RS.200</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>5</td>
            <td class="left-align">ARDUINO AND IOT TECHNOLOGIES</td>
            <td>EEE</td>
            <td>RS.200</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>6</td>
            <td class="left-align">HANDS-ON ARUDINO DEVOLOPMENT BOARD AND SENSORS</td>
            <td>ECE</td>
            <td>RS.200</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>7</td>
            <td class="left-align">HANDS-ON CYBER SECURITY</td>
            <td>CSE,AIML,AIDS</td>
            <td>RS.200</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>8</td>
            <td class="left-align">
              VISION EXPERT UNVEILED
            </td>
            <td>CSE,AIML,AIDS</td>
            <td>RS.200</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>9</td>
            <td class="left-align">PROMPT ENGINEERING</td>
            <td>IT</td>
            <td>RS.200</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>10</td>
            <td class="left-align">MICROSOFT POWER BI</td>
            <td>IT</td>
            <td>RS.200</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>11</td>
            <td
              rowspan="6"
              class="align-center"
              style="vertical-align: middle; text-align: left"
            >
              FLAGSHIP
            </td>
            <td class="left-align">HYDRO HIKE</td>
            <td>CIVIL</td>
            <td>RS.4000</td>
            <td>TEAM SIZE 4</td>
          </tr>
          <tr>
            <td>12</td>
            <td class="left-align">CADATHON</td>
            <td>MECH</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 4</td>
          </tr>
          <tr>
            <td>13</td>
            <td class="left-align">DRONE AERO CHALLENGE</td>
            <td>EEE</td>
            <td>RS.2000</td>
            <td>TEAM SIZE 4</td>
          </tr>
          <tr>
            <td>14</td>
            <td class="left-align">ROBO RACE</td>
            <td>ECE</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 4</td>
          </tr>
          <tr>
            <td>15</td>
            <td class="left-align">HACK 4 HUMANITY</td>
            <td>CSE,AIML,AIDS</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 4</td>
          </tr>
          <tr>
            <td>16</td>
            <td class="left-align">WEB-O-UTSAV</td>
            <td>IT</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 4</td>
          </tr>
            <td>17</td>
            <td rowspan="11" style="vertical-align: middle; text-align: left">
              DEPT. TECHNICAL EVENT
            </td>
            <td class="left-align">MARVEL MODELING</td>
            <td>CIVIL</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 3/4</td>
          </tr>
          <tr>
            <td>18</td>
            <td class="left-align">YANTRA YOCHANA</td>
            <td>MECH</td>
            <td>RS.1000</td>
            <td>INDIVIDUAL</td>
          </tr>
          <tr>
            <td>19</td>
            <td class="left-align">WATER ROCKETRY</td>
            <td>MECH</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 1/3</td>
          </tr>
          <tr>
            <td>20</td>
            <td class="left-align">BYTE FLOW INTEGRATION</td>
            <td>EEE</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 3</td>
          </tr>
          <tr>
            <td>21</td>
            <td class="left-align">LED(LET'S ENLIGHT THE DARK)</td>
            <td>EEE</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 3</td>
          </tr>
          <tr>
            <td>22</td>
            <td class="left-align">TINKER CAD</td>
            <td>ECE</td>
            <td>RS.200</td>
            <td>TEAM SIZE 2/3</td>
          </tr>
          <tr>
            <td>23</td>
            <td class="left-align">CIRCUIT DEBUGGING</td>
            <td>ECE</td>
            <td>RS.200</td>
            <td>TEAM SIZE 2</td>
          </tr>
          <tr>
            <td>24</td>
            <td class="left-align">CODE WARS</td>
            <td>CSE,AIML,AIDS</td>
            <td>RS.200</td>
            <td>TEAM SIZE 1</td>
          </tr>
          <tr>
            <td>25</td>
            <td class="left-align">DATA VIZ.</td>
            <td>CSE,AIML,AIDS</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 2-4</td>
          </tr>
          <tr>
            <td>26</td>
            <td class="left-align">GAME WARE DESIGNING WORLD</td>
            <td>IT</td>
            <td>RS.500</td>
            <td>TEAM SIZE 2/3</td>
          </tr>
          <tr>
            <td>27</td>
            <td class="left-align">APP DEV: A CHALLENGING SPIRIT</td>
            <td>IT</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 3/4</td>
          </tr>

          <tr>
            <td>28</td>
            <td rowspan="4" style="vertical-align: middle; text-align: left">
              CENTRAL EVENTS
            </td>
            <td class="left-align">PROJECT EXIBITION CONTEST (PEC)</td>
            <td>CENTRAL</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 2/3</td>
          </tr>
          <tr>
            <td>29</td>
            <td class="left-align">START UP IDEA CONTEST</td>
            <td>CENTRAL</td>
            <td>RS.1000</td>
            <td>TEAM SIZE 3/4</td>
          </tr>
          <tr>
            <td>30</td>
            <td class="left-align">TECHNICAL PAPER PRESENTATIONS</td>
            <td>CENTRAL</td>
            <td>RS.200</td>
            <td>TEAM SIZE 1/2</td>
          </tr>
          <tr>
            <td>31</td>
            <td class="left-align">GMRIT CRICKET CARNIVAL (IPL AUCTION)</td>
            <td>CENTRAL</td>
            <td>RS.500</td>
            <td>TEAM SIZE 3/4</td>
          </tr>
          <tr>
            <td>32</td>
            <td rowspan="10" style="vertical-align: middle; text-align: left">
              SPOT
            </td>
            <td class="left-align">JAMBOOREE</td>
            <td>CIVIL</td>
            <td>RS.500</td>
            <td>TEAM SIZE 1-5</td>
          </tr>
          <tr>
            <td>33</td>
            <td class="left-align">SECRET SAFARI</td>
            <td>CIVIL</td>
            <td>RS.500</td>
            <td>TEAM SIZE 2-4</td>
          </tr>
          <tr>
            <td>34</td>
            <td class="left-align">SCAN AND DISCOVER</td>
            <td>MECH</td>
            <td>RS.200</td>
            <td>TEAM SIZE 1</td>
          </tr>
          <tr>
            <td>35</td>
            <td class="left-align">ELECTRICAL LADDER</td>
            <td>EEE</td>
            <td>RS.200</td>
            <td>EAM SIZE 1</td>
          </tr>
          <tr>
            <td>36</td>
            <td class="left-align">BRAIN VITAE</td>
            <td>EEE</td>
            <td>RS.200</td>
            <td>TEAM SIZE 1</td>
          </tr>
          <tr>
            <td>37</td>
            <td class="left-align">FOX HUNT</td>
            <td>ECE</td>
            <td>RS.200</td>
            <td>TEAM SIZE 1</td>
          </tr>
          <tr>
            <td>38</td>
            <td class="left-align">CLASH OF ARENAS</td>
            <td>CSE,AIML,AIDS</td>
            <td>RS.500</td>
            <td>TEAM SIZE 4</td>
          </tr>
          <tr>
            <td>39</td>
            <td class="left-align">INTERSTELLER IMPOSTER</td>
            <td>CSE,AIML,AIDS</td>
            <td>RS.500</td>
            <td>TEAM SIZE 4</td>
          </tr>
          <tr>
            <td>40</td>
            <td class="left-align">TRADE MASTER</td>
            <td>IT</td>
            <td>RS.500</td>
            <td>TEAM SIZE 2/3</td>
          </tr>
          <tr>
            <td>41</td>
            <td class="left-align">CINE MASTERS</td>
            <td>IT</td>
            <td>RS.500</td>
            <td>TEAM SIZE 2/3</td>
          </tr>
        </tbody>
      </table>
    </div>
    <script src="js/main.js"></script>
    <?php 
    include('includes/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
