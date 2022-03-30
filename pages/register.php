<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surya Tour</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>
    
        <a href="#about" class="logo"><span>Tour</span>Nepal</a>
    
        <nav class="navbar">
            <a href="../index.php">home</a>
            <a href="package.php">packages</a>
            <a href="service.php">services</a>
            <a href="#register.php">register</a>
            <a href="login.php">login</a>
            <a href="search.php">search</a>
        </nav>
    
    
    </header>




    <section class="home" id="home">

       <div class="content">
            <h3>"VISIT NEPAL 2021"</h3>
            <p>HEAVEN IS MYTH, NEPAL IS REAL</p>
            <a href="package.php#package" class="btn">Discover available packages</a>
        </div>

    </section>



    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>R</span>
            <span>E</span>
            <span>G</span>
            <span>I</span>
            <span>S</span>
            <span>E</span>
            <span>R</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row" id="register">

            <div class="image">
                <img src="images/register1.png" alt="">
            </div>

            <form action="" method="POST">
                <div class="inputBox">
                    <h3>UserName</h3>
                    <input type="text" name="username" placeholder="user name">
                </div>
                <div class="inputBox">
                    <h3>Email</h3>
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="inputBox">
                    <h3>password</h3>
                    <input type="password" placeholder="password" name="password">
                </div>
                <div class="inputBox">
                    <h3>confirm password</h3>
                    <input type="password" placeholder="re-password" name="password1">
                </div>
                <div class="inputBox">
                    
                    <label for="age"> <h3> your age:</h3></label>
                    <select id="age" name="age">
                        <option value="below18">Below 18</option>
                        <option value="18+">18 +</option>
                        <option value="35-60">35-60</option>
                        <option value="60&above">60 & above</option>
                    </select>
                </div>
                <div >
                    <input type="checkbox" name="checkbox" id="checkbox" value="1" >
                    <label for="agreed" class="label"><h2>I aggreed to all the term and conditions.</h2></label>
                </div>  
                <input type="submit" class="btn" name="register" value="register now">

            </form>

        </div>

    </section>

    <!-- book section ends -->










<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box" id="about">
            <h3>about us</h3>
            <p>TourNepal is all about facilating all types of tourist to visit every possible corner of nepal with the best pakages available. We give the best touring experince within nepal with the best quality services at very reasonable cost. TourNepal is best touring agency in nepal and we will never fail to impress you guys.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">kathmandu</a>
            <a href="#">pokhara</a>
            <a href="#">surkhet</a>
            <a href="#">jhapa</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="../index.php">home</a>
            <a href="package.php#package">packages</a>
            <a href="service.php#service">services</a>
            <a href="login.php#login">login</a>
            <a href="#register">register</a>
            <a href="search.php#search">search</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> Developed by <br><span> surya Upadhyaya <br> The British college, kathmandu </span> <br> @copyright 2021, all rights reserved! </h1>
</section>



<?php
        if(isset($_POST['register'])){
            if(!empty(trim($_POST['username']))){
                if(strlen($_POST['username']) >= 6){
                    $userTxt = $_POST['username'];

                    if(!empty(trim($_POST['email'])) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                        $email = $_POST['email'];

                        if(!empty(trim($_POST['password'])) && !empty(trim($_POST['password1']))){
                            $uppercase = preg_match('@[A-Z]@', $_POST['password']);
                            $lowercase = preg_match('@[a-z]@', $_POST['password']);
                            $number = preg_match('@[0-9]@', $_POST['password']);

                            if($uppercase && $lowercase && $number && strlen($_POST['password']) >= 8 &&    $_POST['password'] == $_POST['password1']){
                                $unencrypted_password = $_POST['password'];
                                $encrypted_password = md5($unencrypted_password);

                                if(!empty(trim($_POST['age']))){
                                    $age = $_POST['age'];

                                    if(isset($_POST['checkbox'])){
                                        include "connection.php";

                                        $sql = "INSERT INTO register(`username`, `email`, `password`, `age`) VALUES('$userTxt','$email', '$encrypted_password', '$age')";
                                        
                                        $result = mysqli_query($connection, $sql);
                                        header('Location: login.php#login');
                                    }
                                    else{
                                        echo '<script>alert("You must agree to terms and conditions!")</script>';
                                    }
                                }
                                else{
                                    echo '<script>alert("Select your age group!")</script>';
                                }
                            }
                            else{
                                echo '<script>alert("Password must contain an uppercase, a lowercase and a number and minumum of eight characters and must be same.")</script>';   
                            }
                        }
                        else{
                            echo '<script>alert("Password cannot be empty!")</script>';
                        }
                    }
                    else{
                        echo '<script>alert("Invalid Email!")</script>';
                    }
                }
                else{
                    echo '<script>alert("Username must have a miniumu of six characters!")</script>';
                }
            }
            else{
                echo '<script>alert("Username cannot be empty!")</script>';
            }
        }
    ?>


    








    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>