<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
$insert = false;
if(isset($_POST['day'])){
//   $server="localhost";
//   $username="root";
//   $password="";

  $con=mysqli_connect('localhost','root','','project');
  if(!$con){
      die("connection to this database failed du to".mysqli_connect_error());
  }
  // echo "success connecting to the db";
  $day=$_POST['day'];
  $hours=$_POST['hours'];
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $persons=$_POST['persons'];

  $sql="INSERT INTO `project`.`booking` (`day`, `hours`, `name`, `phone`, `persons`, `dt`) VALUES ('$day', '$hours', '$name', '$phone', '$persons', current_timestamp());";
  // echo $sql;

  if($con->query($sql)== true){
    // echo "successfully inserted";
    $insert = true;
  }
  else{
    echo "error: $sql <br> $con->error";
  }
  $con->close();
}
?>
    <title>|| MONARK - RESTAURANT ||</title>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
</head>
<body>

    <!----page loader starts---->
    <div class="page-loader"></div>
    <!----page loader ends---->
 
    <!----header starts---->
    <header class="header">
        <div class="container">
            <div class="row justify-content-between align-item-center">
                <div class="logo">
                    <a href="#"><img src="img/logo.png" alt="logo"></a>
                </div>
                <button type="button" class="nav-toggler">
                    <span></span>
                </button>
                <nav class="nav">
                    <ul>
                        <li class="nav-item"><a href="#home">home</a></li>
                        <li class="nav-item"><a href="#about">about</a></li>
                        <li class="nav-item"><a href="#our-menu">our menu</a></li>
                        <li class="nav-item"><a href="#team">team</a></li>
                        <li class="nav-item"><a href="#table">table booking</a></li>
                        <li class="nav-item"><a href="order.php">order now</a></li>
                        <li class="nav-item"><a href="#footer">contact us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!----header ends---->

    <!---home section start--->
    <section class="home-section" id="home">
        <div class="home-bg"></div>
        <div class="container">
            <div class="row min-vh-100 align-item-center">
                <div class="home-text" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Monark Restaurant</h1>
                    <p>Monark is Firozabad's answer to the need for a stylish, efficient and affordable boutique hotel and restaurant.
                        Combining the convenience and luxury of a star hotel, Monark welcomes you for a unforgettable experience in hospitality.</p>
                    <a href="#our-menu" class="btn btn-default">our menu</a>
                </div>
            </div>
        </div>
    </section>
    <!---home section ends--->

    <!---about section start--->
    <section class="about-section sec-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-title="our story" data-aos="fade-up">about us</h2>
                </div>
            </div>
            <div class="row">
                <div class="about-text" data-aos="fade-right">
                    <h3>Monark welcomes You</h3>
                    <p>Monark Restaurant is a Pure Vegetarian Restaurant located in the heart of Firozabad. We are the leading vegetarian food that is famous for its exotic spices, delicate herbs, and fine dining experience. We have a wide menu list that includes 
                        South Indian, North Indian, Chinese, Chaats, and beverages under the categories Hearth Stone (Snacks), Desi Kona (North-Indian), Super Tambi (South-Indian).
                    </p>
                    <p> Monark Restaurant is committed to provide excellent food, service, 
                        and an unforgettable dining experience for you and your family to enjoy for many years to come.</p>
                    <a href ="#our-menu" class="btn btn-default">check our menu</a>             
                </div> 
                <div class="about-img" data-aos="fade-left">                  
                  <div class="img-box">
                      <h3>20+ years experience</h3>
                      <img src="img/about-img.jpg" alt="about img">
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!---about section ends--->

    <!---menu section starts--->
    <section class="menu-section sec-padding" id="our-menu">
      <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 data-title="order now" data-aos="fade-up">our menu</h2>
            </div>
        </div>  
        <div class="row">
            <div class="menu-tabs" data-aos="fade-up">
                <button type="button" class="menu-tab-item active" data-target="#main-course">main course</button>
                <button type="button" class="menu-tab-item" data-target="#tandoori">tandoori</button>
                <button type="button" class="menu-tab-item" data-target="#Chinese">chinese</button>
                <button type="button" class="menu-tab-item" data-target="#sweets">sweets</button>
            </div>
        </div>
        <div class="row menu-tab-content active" id="main-course">
           

            <div class="menu-item" data-aos="fade-up-right">
                <div class="menu-item-title">
                    <img src="img/menu/1.jpg" alt="menu-item thumbnail">
                    <h3>Paneer Tikka Masala</h3>
                </div>   
                <div class="menu-item-price">
                    250.00
                </div>
            </div>
            
            <div class="menu-item" data-aos="fade-up-left">
                <div class="menu-item-title">
                    <img src="img/menu/2.jpg" alt="menu-item thumbnail">
                    <h3>Mutter Paneer</h3>
                </div>   
                <div class="menu-item-price">
                    215.00
                </div>
            </div>
            
            
            <div class="menu-item" data-aos="fade-up-right">
                <div class="menu-item-title">
                    <img src="img/menu/3.jpg" alt="menu-item thumbnail">
                    <h3>Channa Masala</h3>
                </div>   
                <div class="menu-item-price">
                   150.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-left">
                <div class="menu-item-title">
                    <img src="img/menu/4.jpg" alt="menu-item thumbnail">
                    <h3>Malai Kofta</h3>
                </div>   
                <div class="menu-item-price">
                    250.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-right">
                <div class="menu-item-title">
                    <img src="img/menu/5.jpg" alt="menu-item thumbnail">
                    <h3>Palak Paneer</h3>
                </div>   
                <div class="menu-item-price">
                    200.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-left">
                <div class="menu-item-title">
                    <img src="img/menu/6.jpg" alt="menu-item thumbnail">
                    <h3>Paneer Bhurji</h3>
                </div>   
                <div class="menu-item-price">
                    300.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-right">
                <div class="menu-item-title">
                    <img src="img/menu/7.jpg" alt="menu-item thumbnail">
                    <h3>Dal Makhini</h3>
                </div>   
                <div class="menu-item-price">
                    215.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-left">
                <div class="menu-item-title">
                    <img src="img/menu/8.jpg" alt="menu-item thumbnail">
                    <h3>Mixed Veg</h3>
                </div>   
                <div class="menu-item-price">
                    180.00  
                </div>
            </div>
        </div>
           

        <div class="row menu-tab-content" id="tandoori">

            <div class="menu-item" data-aos="fade-up-right">
                <div class="menu-item-title">
                    <img src="img/menu/9.jpg" alt="menu-item thumbnail">
                    <h3>Tandoori Roti</h3>
                </div>   
                <div class="menu-item-price">
                    30.00
                </div>
            </div>
            
            <div class="menu-item" data-aos="fade-up-left">
                <div class="menu-item-title">
                    <img src="img/menu/10.jpg" alt="menu-item thumbnail">
                    <h3>Tandoori Stuffed Parantha</h3>
                </div>   
                <div class="menu-item-price">
                    100.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-right">
                <div class="menu-item-title">
                    <img src="img/menu/11.jpg" alt="menu-item thumbnail">
                    <h3>Tandoori Parantha</h3>
                </div>   
                <div class="menu-item-price">
                    60.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-left">
                <div class="menu-item-title">
                    <img src="img/menu/12.jpg" alt="menu-item thumbnail">
                    <h3>Tandoori Butter Naan</h3>
                </div>   
                <div class="menu-item-price">
                    80.00
                </div>
            </div>
        </div>
        
        <div class="row menu-tab-content" id="Chinese">
        
            <div class="menu-item" data-aos="fade-up-right">
                <div class="menu-item-title">
                    <img src="img/menu/13.jpg" alt="menu-item thumbnail">
                    <h3>Hakka Noodles</h3>
                </div>   
                <div class="menu-item-price">
                    180.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-left">
                <div class="menu-item-title">
                    <img src="img/menu/14.jpg" alt="menu-item thumbnail">
                    <h3>White Sauce Pasta</h3>
                </div>   
                <div class="menu-item-price">
                    200.00
                </div>
            </div>
        </div>

        <div class="row menu-tab-content" id="sweets">
        
            <div class="menu-item" data-aos="fade-up-right">
                <div class="menu-item-title">
                    <img src="img/menu/15.jpg" alt="menu-item thumbnail">
                    <h3>Basundi</h3>
                </div>   
                <div class="menu-item-price">
                    215.00
                </div>
            </div>

            <div class="menu-item" data-aos="fade-up-left">
                <div class="menu-item-title">
                    <img src="img/menu/16.jpg" alt="menu-item thumbnail">
                    <h3>ShriKhand</h3>
                </div>   
                <div class="menu-item-price">
                    300.00
                </div>
            </div>
        </div>
      </div>  
    </section>
    <!--menu section ends---> 

     <!----team section starts------>
     <div class="team-section sec-padding" id="team">
         <div class="container">
             <div class="row">
                 <div class="section-title">
                     <h2 data-title="teams" data-aos="fade-up">our chefs</h2>
                 </div>
             </div>
             <div class="row">
                 <div class="team-item" data-aos="flip-left" data-aos-duration="1000">
                     <img src="img/team/1.jpg" alt="team item">
                     <div class="team-item-info">
                         <h3>Manjeet Kaur</h3>
                         <p>head chef</p>
                     </div>
                 </div>

                 <div class="team-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="img/team/2.jpg" alt="team item">
                    <div class="team-item-info">
                        <h3>Ranbeer Brar</h3>
                        <p>head chef</p>
                    </div>
                </div>

                <div class="team-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="img/team/3.jpg" alt="team item">
                    <div class="team-item-info">
                        <h3>Saransh Goila</h3>
                        <p>head chef</p>
                    </div>
                </div>
             </div>
         </div>
     </div>
      <!----team section ends------>

      <!-------table booking section starts-->
      <section class = "table-section sec-padding" id="table">
        <div class="section-title">
            <h2 data-title="Monark Welcomes You" data-aos="fade-up">Table Booking</h2>
            <?php
            if($insert == true){
            echo "<h5>Thanks for your response your table has been booked</h5>";
            }
          ?>
        </div>
        <div class = "card-container" data-aos="fade-right">
            <div class = "card-content">
                <h3>Reservation</h3>
                <form action="index.php" method="POST">
				<div class = "form-row">
                        <input type = "text" name="day" id="day" placeholder="Enter the day">
                    </div>
                    <div class = "form-row">
                        <input type = "text" name="hours" id="hours" placeholder="Enter the no. of hours">
                    </div>

                    <div class = "form-row">
                        <input type = "text" name="name" id="name" placeholder="Full Name">
                    </div>
                    <div class = "form-row">
                        <input type = "text" name="phone" id="phone" placeholder="Phone Number">
                    </div>
                    <div class = "form-row">
                        <input type = "number" name="persons" id="persons" placeholder="How Many Persons?" min = "1">
                    </div>

                    <div class = "form-row">
                       
                        <input type = "submit" value = "BOOK TABLE">
                    </div>
				</form>
                    
            </div>
        </div>
    </section>
      <!-------table booking section ends-->

      <!----footer starts------> 
      <footer class="footer" id="footer">
          <div class="container">
              <div class="row">
                  <div class="footer-item" data-aos="fade-up">
                      <h3>our location</h3>
                      <p>xyz Street, Sector-12, <br>Firozabad-283203</p>
                  </div>
                  <div class="footer-item" data-aos="fade-up">
                      <h3>opening hours</h3>
                      <p>Monday to Saturday <br> 9:00 AM - 10:00 PM</p>
                  </div>
                  <div class="footer-item" data-aos="fade-up">
                      <h3>contact us</h3>
                      <p>91-534-2356</p>
                      <p>info@gmail.com</p>
                      <div class="social-links">
                          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                          <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="copyright">                   
                    Terms | Privacy | FAQs | Cookie Statement <center>&copy; 2021 MONARK. All Rights Reserved</center>
                  </div>
              </div>
          </div>
      </footer>   
        
      <!----footer ends------>
      <script src="js/aos.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

