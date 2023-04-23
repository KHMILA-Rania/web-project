<?php 
$flag="";
if (isset($_POST['submit'])){
    $name= $_POST['name'] ;
    $password=$_POST['password'];
    $conn=mysqli_connect('localhost','root','','webProject');
    $query=mysqli_query($conn,"INSERT INTO `blogger`(`name`,`password`) VALUES ('$name','$password')");
    if($query){
        $flag ='1';}
        else{
            $flag ='0';
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltrl">
    <head>
        <meta charset="utf-8">
        <title>Animated login form</title>
        <link rel="stylesheet"  href="login.css"> 
    </head>
    <body>
        <!--navbar-->
        <nav class="navbar">
            <div class="navbar_container">
                <a href="#home" id="navbar_logo">COLOR</a>
                <div class="navbar_toggle" id="mobile_menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
    
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="index.html" class="navbar__links" id="home-page">
                            Home
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="#about" class="navbar__links" id="about-page">
                            About
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="#services" class="navbar__links" id="services-page">
                            Services
                        </a>
                    </li>
                    <li class="navbar__btn">
                        <a href="login.html" class="button" id="signup">
                            Sign Up
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--end navbar-->
        <form class="box" action ="" method="post">
            <h1 style=" color: white;
            text-transform: uppercase;
            font-weight: 500;">Login</h1>
            
            <input type="text"  name="name" placeholder="Username">
            <input type="password"  name="password" placeholder="Password" >
            <!--<button id="submit" value="submit">Login</button>-->
            <button type="submit" name="submit" >Login</button>
            <?php 
            if($flag == '1'){
                ?>
            <p style="color:green;"><strong>Success !</strong> Details have been submitted</p>
        <?php 
            }
        ?>

<?php 
            if($flag == '0'){
                ?>
            <p style="  color:red;"><strong>Failed ! </strong> Details can't be  submitted</p>
        <?php 
            }
        ?>

    


        </form>
    </body>

</html>