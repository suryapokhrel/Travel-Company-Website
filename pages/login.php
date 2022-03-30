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
            <a href="register.php">register</a>
            <a href="#login.php">login</a>
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

    <!-- login form container  -->
<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>L</span>
        <span>o</span>
        <span>G</span>
        <span>I</span>
        <span>N</span>
    </h1>

    <div class="row" id="login">

        <div class="image">
            <img src="images/login.png" alt="">
        </div>

        <form action="" method="POST">
            <div class="inputBox">
                <h3>UserName</h3>
                <input type="text" name="username" placeholder="username">
            </div>
            
            <div class="inputBox">
                <h3>password</h3>
                <input type="password" name="password" placeholder="password">
            </div>
            
            <input type="submit" class="btn" value="Log In" name="login">

        </form>

    </div>

</section>



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
            <a href="#login">login</a>
            <a href="register.php#register">register</a>
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
            if(isset($_POST['login'])){
                include "connection.php";

                if(!empty($_POST['username'])){
                    $txtUser = $_POST['username'];

                    if (!empty($_POST['password'])) {
                        $txtPass = md5($_POST['password']);

                        $sql = "SELECT * FROM register WHERE username='" . $txtUser . "' AND password='" . $txtPass ."'";

                        $result = mysqli_query($connection, $sql);

                        if($row=mysqli_fetch_assoc($result)){
                            $_SESSION['users'] = $txtUser;
                            header ('location: search.php#search');
                            // echo "<script>alert('User recognised!!   you may processed to search now.')</script>";
                            
                        } 

                        else{
                            $_SESSION['error']= 'User not recognised';
                            // header ('location: register.php');
                            echo "<script>alert('User not recognised!  have you register yet? if not? plz register first!!!!')</script>";
                        }


                        // if($row=mysqli_fetch_assoc($result)){
                        //     $_SESSION['users'] = $txtUser;
                        //     header ('location: search.php#search');
                        // }
                        // else{
                        //     $_SESSION['error']= 'User not recognised';
                        //     header('Location: register.php#register');

                        // }

                    }
                    else
                    {
                        echo "<script>alert(\"password cannot be empty!\")</script>";

                    }

                }
                else
                {
                //     $_SESSION['error']= 'User not recognised';
                //     header ('location: register.php');
                    echo "<script>alert(\"username cannot be empty!\")</script>";



                }
            } 



    ?>



        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
    </body>
</html>