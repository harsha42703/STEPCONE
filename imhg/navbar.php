
<?php 
session_start();
if(isset($_SESSION['email']))
{
    $user_email = $_SESSION['email'];

}



?>

<header class="header0">
            <img src="assets/mainpage/STEPCONE.png" alt="" width="46px" height="36px" class="mbl_logo">
            <a  href="#" class="header0__logo" style="font-family: Montserrat; text-decoration: none;  font-size: 28px; background-color: transparent; font-weight: 500; color: white;" >Stepcone</a>

            <i class='bx bx-menu header0__toggle' id="header0-toggle" ></i>

            <nva class="nva" id="nva-menu">
                <div class="nva__content bd-grid">
                    <div class="main_left_nva">
                        <a style=" text-decoration: none;"  href="" class="nva__perfil">
                            <div class="nva__img">
                                <img src="assets/mainpage/STEPCONE.png" alt="">
                            </div>
                            
                            <div>
                                <span class="nva__name" style="font-family: 'Montserrat; font-size: 28px;">STEPCONE</span>
                            </div>
                        </a>    
                    </div>
                   <div class="main_right_nva">
                    <div class="nva__menu">
                        <ul class="nva__list" style="margin-bottom: 0px;">
                            <li class="nva__item"><a id="hm" style=" text-decoration: none;"  href="index.php" class="nva__link ">Home</a></li>
                            <li class="nva__item"><a id="ab" style=" text-decoration: none;"  href="about.php" class="nva__link">About</a></li>
    
                            <li class="nva__item dropbar">
                                <a id="eve" style=" text-decoration: none;"   href="#" class="nva__link dropbar__link">Events <i class='bx bx-chevron-down dropbar__icon'></i></a>
                                    
    
                                <ul class="dropbar__menu">
                                    <li class="dropbar__item"><a style=" text-decoration: none;" href="centralevents.php" class="nva__link">Central Events</a></li>
                                    <li class="dropbar__item"><a style=" text-decoration: none;" href="flagshipevents.php" class="nva__link">Signature Events</a></li>
                                    <li class="dropbar__item"><a  style=" text-decoration: none;" href="technicalevents.php" class="nva__link">Frontline Events</a></li>
                                    
                                    <li class="dropbar__item"><a style=" text-decoration: none;"  href="spotevents.php" class="nva__link">On-Site Events</a></li>
                                    
                                    <li class="dropbar__item"><a style=" text-decoration: none;"  href="workshopevents.php" class="nva__link">Workshops</a></li>
                                </ul>
                            </li>
                            <li class="nva__item"><a id="rge" style=" text-decoration: none;"  href="regestration.php" class="nva__link">Registrations</a></li>
                            <li class="nva__item"><a id="acc" style=" text-decoration: none;" href="accomdation.php" class="nva__link">Accomodation</a></li>
                            <li class="nva__item"><a id="con" style=" text-decoration: none;" href="contact.php" class="nva__link">Contact</a></li>
                            <?php
                            if(!isset($_SESSION['email']))
                            {
                                echo '<li class="nva__item login"><a style=" text-decoration: none;" href="backend/login.php" class="nva__link">Login</a></li>';
                            }
                            else{
                                echo '<li class="nva__item login"><a style=" text-decoration: none;" href="backend/logout.php" class="nva__link">Logout</a></li>';
                            }
                            
                            ?>
                        </ul>
                    </div>
                   </div>
                </div>
            </nva>
        </header>