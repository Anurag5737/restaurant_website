<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $insert = false;
        if(isset($_POST['name'])){
        
        $con=mysqli_connect('localhost','root','','project');
        if(!$con){
            die("connection to this database failed du to".mysqli_connect_error());
        }

        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $dishes=$_POST['dishes'];
        $persons=$_POST['persons'];

        $sql="INSERT INTO `project`.`menu` (`name`, `phone`, `email`, `dishes`, `persons`, `dt`) 
        VALUES ('$name', '$phone', '$email', '$dishes', '$persons', current_timestamp());";


        if($con->query($sql)== true){
    
            $insert = true;
        }
        else{
            echo "error: $sql <br> $con->error";
        }
        $con->close();
        }
    ?>
    <title>|| Order Form ||</title>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    
</head>
<body>

    <!----page loader starts---->
    <div class="page-loader"></div>
    <!----page loader ends---->

    <section class = "order-section sec-padding">
        <div class="section-title">
            <h2 data-title="Monark Welcomes You" data-aos="fade-up">Place Your Order</h2>
            <?php
            if($insert == true){
               echo "<h5>Thanks for your response your order has been booked</h5>";
            }
          ?>
        </div>
        <div class = "order-container" data-aos="fade-right">
            <div class = "order-content">
                <h3>Order</h3>
                <form action="order.php" method="POST">
                    <div class = "form-row">
                        <input type = "text" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class = "form-row">
                        <input type = "text" name="phone" id="phone" placeholder="Enter your number">
                    </div>

                    <div class = "form-row">
                        <input type = "email" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class = "form-row">
                        <input type = "text" name="dishes" id="dishes" placeholder="Enter the name of dish">
                    </div>
                    <div class = "form-row">
                        <input type = "number" name="persons" id="persons" placeholder="For how many persons?" min = "1">
                    </div>

                    <div class = "form-row">
                       
                        <input type = "submit" value = "BOOK TABLE">
                    </div>
                </form>
            </div>
        </div>
    </section>
      <!-------table booking section ends-->

      



    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>    
</body>
</html>

