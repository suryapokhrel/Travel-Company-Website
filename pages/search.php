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
            <a href="login.php">login</a>
            <a href="#search.php">search</a>

        </nav>
    
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <a href="login.php"><i class="fas fa-user"  id="login-btn"></i></a> 
        </div>
    
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search any place inside nepal...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    
    </header>

    <section class="home" id="home">

        <div class="content">
            <h3>"VISIT NEPAL 2021"</h3>
            <p>HEAVEN IS MYTH, NEPAL IS REAL</p>
            <a href="package.php#package" class="btn">Discover available packages</a>
        </div>
    
    
    </section>






<section class="book" id="book"> 

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>a</span>
            <span>r</span>
            <span>c</span>
            <span>h</span>
        </h1>

        <div class="row" id="search">

            <div class="image">
                <img src="images/search1.png" alt="">
            </div>

            <form name="search" action="searchlocation.php" method="POST">
                <div class="inputBox">
                    <h3>Search package Category</h3>
                    <input type="text" placeholder="search place" name="searchLocation">
                </div>
                
                <div class="inputBox">
                    <h3>Choose your Prefered package range</h3>

                    <input type="radio" id="price" name="price" value="100-500">
                    <label for="price"><h4>$100-500</h4></label>
                    <input type="radio" id="price" name="price" value="600-1000">
                    <label for="price"><h4>$600-1000</h4></label>
                    <input type="radio" id="price" name="price" value="1100-1900">
                    <label for="price"><h4>$1100-1900</h4></label>
                    <input type="radio" id="price" name="price" value="2000-3000">
                    <label for="price"><h4>$2000-3000</h4></label>
                </div>

                <div class="inputBox">
                    <label for="Region"><h3>Select Region:</h3> </label>
                    <select name="Region">
                        <option value="nothing">Please select</option>
                        <option value="MidWestern Region">MidWestern Region</option>
                        <option value="Western Region">Western Region</option>
                        <option value="Center Region">Center Region</option>
                        <option value="Eastern Region">Eastern Region</option>
                    </select>
                </div>

                <div class="inputBox">
                    <h3>ACCENDING/DECENDING</h3>

                    <input type="radio" id="acc" name="acc" value="ascending">
                    <label for="price"><h4>ACCENDING</h4></label>
                    <input type="radio" id="acc" name="acc" value="descending">
                    <label for="price"><h4>DECENDING</h4></label>
                    
                </div>
                <input type="submit" class="btn" name="searchSubmit" value="search">

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
            <a href="service.php">services</a>
            <a href="login.php#login">login</a>
            <a href="register.php#register">register</a>
            <a href="#">search</a>
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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>