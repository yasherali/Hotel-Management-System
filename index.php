<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="left-nav">
            <img src="img/WhatsApp Image 2023-01-12 at 11.02.53 PM (1).jpeg" alt="logo">
        </div>
        <div class="right-nav">
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="about.php">About Us</a></li>
                <li class="item"><a href="room.php">Rooms</a></li>
                <li class="item"><a href="food.php">Food</a></li>
                <li class="item"><a href="contact.php">Contact Us</a></li>
                <li class="item"><a href="cart.php">Cart</a></li>
                <li class="item"><a href="admin.php">Admin</a></li>
                <li class="item"><a href="bookinghall.php">Booking</a></li>
                <li class="item"><a href="feedback.php">Feedback</a></li>
               
                
            </ul>
        </div>
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo "
                <div class='user'>

                    $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                </div>
                ";
            }
            else{
                echo "
                <div class='sign-in-up'>
                <button type='button' onclick=\"popup('login-popup')\">Login</button>
                <button type='button' onclick=\"popup('register-popup')\">Register</button>
                </div>
                ";
            }
        ?>
    </nav>

    <!-- -------------- login ------------------------------- -->
    <div class="popup-container" id="login-popup">
        <div class=" popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User Login</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" class="login-btn" name="login">Login</button>
            </form>
            <div class="forgot-btn">
                <button type="button" onclick="forgotPopup()">Forgot Password</button>
            </div>
        </div>
    </div>


    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="FULL NAME"  name="fullname" required>
                <input type="text" placeholder="User Name" name="username" required>
                <input type="email" placeholder="E-Mail"  name="email" required>
                <input type="password" placeholder="Password"  name="password" required>
                <button type="submit" class="register-btn" name="register">Register</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form action="forgotpassword.php" method="POST">
                <h2>
                    <span>Reset Password</span>
                    <button type="reset" onclick="popup('forgot-popup')">X</button>
                </h2>
                <input type="email" placeholder="E-mail" name="email">
                
                <button type="submit" class="reset-btn" name="send-reset-link">Send Link</button>
            </form>
            
        </div>
    </div>
    <!-- <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
         echo"<h1 style='text-align:center; margin-top:200px'>Welcome - $_SESSION[username]</h1>";
      }
    ?> -->

    <!-- ----------  Home --------------------- -->
    <section id="home">
        <h1 class="h1">Welcome to Hotel Management System</h1>
    

    </section>

    <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">A.C Delux Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 1100rs.</p>
          <p class="price">Price per room : 1100Rs/-</p>
          <a href="room.php"><button class="price-btn" >Book A Room</button></a>
          </div>
          <div class="thumbnail">
          <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
          </div>
    </section>

    <section id="rooms-left">
        <div class="paras">
          <p class="sectionTag">A.C. Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 900rs.</p>
          <p class="price">Price per room : 900Rs/-</p>
          <a href="room.php"><button class="price-btn">Book A Room</button></a>
          </div>
          <div class="thumbnail">
           <img src="img/ac4.jpg" alt="delux" class="imgFluidd">
          </div>
    </section>

    <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">Non A.C. Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 700rs.</p>
          <p class="price">Price per room : 700Rs/-</p>
            <a href="room.php"><button class="price-btn">Book A Room</button></a>
          </div>
          <div class="thumbnail">
          <img src="img/nonacroom.jpg" alt="delux" class="imgFluid">
          </div>
    </section>

    <!-- -------------------------food ------------------------ -->
    <section id="services-container">
        <h1 class="h-primary center">Our Speciality</h1>
        <div id="services">
            <div class="box">
                <a href="food.php"><img src="img/manchu.png" alt="manchurion"></a>
               <h2 class="h-secondary center">Chinese</h2>
               <p class="center">Chinese food, rich and colorful, has diversified color, aromatic flavor, and excellent taste as its main features. With these three characteristics, it is not only tasty but also a work of art for people to appreciate</p>
            </div>
            <div class="box">
                 <a href="food.php"><img src="img/pasta.png" alt="pasta"></a>
                <h2 class="h-secondary center">Italian</h2>
                <p class="center">The Mediterranean diet forms the basis of Italian cuisine, rich in pasta, fish, fruits and vegetables. Cheese, cold cuts and wine are central to Italian cuisine, and along with pizza and coffee (especially espresso) form part of Italian gastronomic culture.</p>
             </div>
             <div class="box">
             <a href="food.php"><img src="img/mah.png" alt="maharshtrian"></a>
                <h2 class="h-secondary center">Vegetarian</h2>
                <p class="center">We set out to sample meatless meals at fast food and casual restaurants in order to find establishments that do justice to vegetarian diners by creating at least one or two scrumptious non-meat options. We’re not talking about shops that slap a prepackaged name brand veggie burger between a bun, but places that create their own meatless magic</p>
             </div>
        </div>

        <div id="services">
            <div class="box">
            <a href="food.php"><img src="img/panner.png" alt="panner"></a>
               <h2 class="h-secondary center">Punjabi</h2>
               <p class="center">Distinctively Punjabi cuisine is known for its rich, buttery flavours along with the extensive vegetarian and meat dishes. Main dishes include sarson dā saâg (a stew whose main ingredient is mustard greens) and makki di roti (flatbreads made with cornmeal)</p>
            </div>
            <div class="box">
            <a href="food.php"><img src="img/WhatsApp Image 2023-01-12 at 11.25.20 PM.jpeg" alt="dosa"></a>
              <h2 class="h-secondary center">Pakistani</h2>
                <p class="center">Rice, wheat-based flatbread (roti, chappti, paratha, puri), lentils (dal), vegetables (sabzi), yogurt, and fruits (eaten with a dash of salt) are staples through out the country. The average Pakistani consumes three main meals; breakfast, lunch, and dinner.</p>
             </div>
             <div class="box">
             <a href="food.php"><img src="img/faluda.png" alt="faluda"></a>
                <h2 class="h-secondary center">Deserts</h2>
                <p class="center">Desserts can be defined as a usually sweeter course that concludes a meal. This definition includes a range of courses ranging from fruits or dried nuts to multi-ingredient cakes and pies. Many cultures have different variations of dessert.</p>
             </div>
        </div>
       
    </section>

    
    <section id="booking-hall">
        <h1 class="h1">Party And Marriage Halls</h1>
        <button id="book-btn"><a href="bookinghall.php"> Book A HAll Now</a></button>

    </section>












    <!-- -------------------------Footer ---------------------------- -->

    <section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                <h3>ABOUT US</h3>
                <p>The hotel has a grand facade, which leads into an elegantly decorated lobby presenting an eye catching blend of National and International decor. The multi lingual staff at the front desk ensures that all guests needs are met instantly. The hotel has 440 luxurious and well appointed guests rooms, which cater to all the needs of the business and holiday travelers <br> </p>
                </div>
                <div class="footer-center">
                    <h3>USEFULL LINKS</h3>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="food.php">Food</a>
                    <a href="booking.php">Booking</a>
                    <a href="index.php">Home</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    <p>Gulshan-e-iqbal,Karachi,Pakistan <br>
                  Karachi,Pin-352120<br>
                  +92 3162335113<br>
                  www.ssuet.com</p>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Monday: 7:AM - 12Pm
                    </div>
                  
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Tue-Wed: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thur-Fri: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Sat-Sun: 7:Am - 12Pm
                    </div>


                </div>
            </div>
        </div>
    </section>
    

    <script>
        function popup(popup_name)
        {
             get_popup=document.getElementById(popup_name);
             if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else{
                get_popup.style.display="flex";
            }
        }

        function forgotPopup()
        {
            document.getElementById('login-popup').style.display="none";
            document.getElementById('forgot-popup').style.display="flex";
        }
    </script>
</body>
</html>