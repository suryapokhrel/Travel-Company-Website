<html>
<head>
    <style>
        table{
            display: inline-block;
            margin-left: 10%;
            margin-right: 5%;
            margin-top: 3%;
        }
        img{
            height:  200px;
            width:  250px;
        }

    </style>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <section class="book" id="book"> 

        <h1 class="heading">
            <span>y</span>
            <span>o</span>
            <span>u</span>
            <span>r</span>
            <span class="space"></span>
            <span>r</span>
            <span>e</span>
            <span>s</span>
            <span>u</span>
            <span>l</span>
            <span>t</span>


        </h1>

        <span><h2> <a href="login.php">LOG OUT</a></h2></span>
    </section>

    


<?php
    include "connection.php";

    if(isset($_POST['searchLocation'])){
        $Name = ucfirst(strtolower($_POST['searchLocation']));
    }
    else{
        $Name = "";
    }

    if(isset($_POST['price'])){
        $Price = $_POST['price'];
    }
    else{
        $Price = 0;
    }
    
    if(isset($_POST['Region'])){
        $Region = $_POST['Region'];
    }
    else{
        $Region = "nothing";
    }
    
    if(isset($_POST['acc'])){
        $order = $_POST['acc'];
    }
    else{
        $order = 'ascending';
    }

    if(isset($_SESSION['users'])){
        if(!empty($Name) && $Price != 0 && $Region != "nothing"){
            $price_arr = explode("-", $Price);

            if($order == 'descending'){
                $query = "SELECT * FROM location WHERE `packagePrice` BETWEEN $price_arr[0] AND $price_arr[1] ORDER BY `locationName` DESC";
            }
            else{
                $query = "SELECT * FROM location WHERE `packagePrice` BETWEEN $price_arr[0] AND $price_arr[1] ORDER BY `locationName` ASC";
            }
            $result = mysqli_query($connection, $query);

            while($row=mysqli_fetch_assoc($result)){
                if(strpos($row['locationName'], $Name) && $row['Region'] == $Region){
                    echo "<table cellpadding=10px border=0>";
                    echo "<tr><td>"."<img src='images/".$row['imageName']."'>"."</td></tr>";
                    echo "<tr><th>".$row['locationName']."</th></tr>";
                    echo "<tr><th>".$row['packagePrice']."</th></tr>";
                    echo "</table>";
                }
            }
            
        }
        elseif($Price != 0 && $Region != "nothing"){
            $price_arr = explode("-", $Price);

            if($order == 'descending'){
                $query = "SELECT * FROM location WHERE `packagePrice` BETWEEN $price_arr[0] AND $price_arr[1] ORDER BY `locationName` DESC";
            }
            else{
                $query = "SELECT * FROM location WHERE `packagePrice` BETWEEN $price_arr[0] AND $price_arr[1] ORDER BY `locationName` ASC";
    
            }
            

            $result = mysqli_query($connection, $query);

            while($row=mysqli_fetch_assoc($result)){
                if(strpos($row['Region'], $Region)){
                    echo "<tr><td>"."<img src='images/".$row['imageName']."'>"."</td></tr>";
                    echo "<tr><th>".$row['locationName']."</th></tr>";
                    echo "<tr><th>".$row['packagePrice']."</th></tr>";
                    echo "</table>";
                }
            }
        }
        elseif($Price != 0 && !empty($Name)){
            $price_arr = explode("-", $Price);

            if($order == 'descending'){
                $query = "SELECT * FROM location WHERE `packagePrice` BETWEEN $price_arr[0] AND $price_arr[1] ORDER BY `locationName` DESC";

            }
            else{
                $query = "SELECT * FROM location WHERE `packagePrice` BETWEEN $price_arr[0] AND $price_arr[1] ORDER BY `locationName` ASC";

            }
            
            $result = mysqli_query($connection, $query);

            while($row=mysqli_fetch_assoc($result)){
                if(strpos($row['locationName'], $Name)){
                    echo "<table cellpadding=10px border=0>";
                    echo "<tr><td>"."<img src='images/".$row['imageName']."'>"."</td></tr>";
                    echo "<tr><th>".$row['locationName']."</th></tr>";
                    echo "<tr><th>".$row['packagePrice']."</th></tr>";
                    echo "</table>";
                }
            }
        }
        elseif(!empty($Name) && $Price == 0 && $Region == "nothing"){
            if ($order == "descending") {
                $query = "SELECT * FROM `location` ORDER BY `locationName` DESC " ; 
            }
            else
            {
                $query = "SELECT * FROM `location` ORDER BY `locationName` ASC " ;
            }
            
            $result = mysqli_query($connection, $query);

            while($row=mysqli_fetch_assoc($result)){
                if(strpos($row['locationName'], $Name)){
                    echo "<table cellpadding=10px border=0>";
                    echo "<tr><td>"."<img src='images/".$row['imageName']."'>"."</td></tr>";
                    echo "<tr><th>".$row['locationName']."</th></tr>";
                    echo "<tr><th>".$row['packagePrice']."</th></tr>";
                    echo "</table>";
                }
            }
        }
        elseif(empty($Name) && $Price != 0 && $Region == "nothing"){
            $price_arr = explode('-', $Price);
            if($order == "descending"){
                $query = "SELECT * FROM `location` WHERE `packagePrice` BETWEEN $price_arr[0] AND $price_arr[1] ORDER BY `locationName` DESC ";
            }
            else{
                $query = "SELECT * FROM `location` WHERE `packagePrice` BETWEEN $price_arr[0] AND $price_arr[1] ORDER BY `locationName` ASC ";
            }
            $result = mysqli_query($connection, $query);

            while($row=mysqli_fetch_assoc($result)){
                echo "<table cellpadding=10px border=0>";
                echo "<tr><td>"."<img src='images/".$row['imageName']."'>"."</td></tr>";
                echo "<tr><th>".$row['locationName']."</th></tr>";
                echo "<tr><th>".$row['packagePrice']."</th></tr>";
                echo "</table>";
            }

        }
        elseif(empty($Name) && $Price == 0 && $Region != "nothing"){
            if($order == "descending"){
                $query = "SELECT * FROM `location` WHERE `Region` = '$Region'  ORDER BY `locationName` DESC ";
            }
            else{
                $query = "SELECT * FROM `location` where `Region` = '$Region' ORDER BY `locationName` ASC ";
            }

            $result = mysqli_query($connection, $query);
            while($row=mysqli_fetch_assoc($result)){
                echo "<table cellpadding=10px border=0>";
                echo "<tr><td>"."<img src='images/".$row['imageName']."'>"."</td></tr>";
                echo "<tr><th>".$row['locationName']."</th></tr>";
                echo "<tr><th>".$row['packagePrice']."</th></tr>";
                echo "</table>";
            }
        }

        else{
            header("Location: login.php#login");
        }

    }
    
?>
<!-- <section>
    <a href="login.php">
        <h3 class="heading">
            <span>l</span>
            <span>o</span>
            <span>g</span>
            <span>o</span>
            <span>u</span>
            <span>t</span>
        </h3>

    </a>
</section> -->
 <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>