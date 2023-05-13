<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <!--NAVBAR SECTION-->
    <style>
        .navbar_container {
  display: flex;
  justify-content: flex-start;  /* This aligns the items to the left */
  align-items: center;          /* This centers the items vertically */
}

#navbar_logo {
  margin-right: auto;           /* This pushes the logo to the left */
}
    </style>
    <nav class="navbar">
        <div class="navbar_container">
            <a href="#home" id="navbar_logo">BlogIt</a>
            <div class="navbar_toggle" id="mobile_menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>

            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">
                        Home
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">
                        About
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="../signIn/signIn.php" class="navbar__links" id="services-page">
                        Sign In
                    </a>
                </li>
                <li class="navbar__btn">
                    <a href="signUp.php" class="button" id="signup">
                        Sign Up
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    
    <!--Hero section-->
    <div class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading">Choose your <span>Blogs</span></h1>
            <p class="hero__description">Unlimited possibilities</p>
            <button class="main__btn">
                <a href="#">Explore</a>
            </button>
        </div>
    </div>
    <!--About section -->
    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card">
                    <i class="fas fa-layer-group"></i>
                </div>
            </div>
            <div class="main__content">
                <h1>What do we do ?</h1>
                <h2>We give you the space to share your thoughts</h2>
                <p>Schedule a call to learn more about our services</p>
                <button class="main__btn">
                    <a href="#">Schedule a call</a>
                </button>
            </div>
        </div>
    </div>
    <!-- Services section -->
    <hr style="height:5px;
  border-width:0;
  background-color:violet;">

    
        
        

       
<!--
        <div class="services__card">
            
            <h2>Ryan Robinson's Blog </h2>
            <p> Blogging, Marketing & SEO</p>
            <div class="services__btn"><a href="RyanBlog.html">
                <button>Read more</button></div></a>
        
        </div>
    
    <div class="services__card">
        <h2>When I stopped trying</h2>
        <p>by Andrew Hamilton</p>
        <div class="services__btn">
            <a href="AndrewBlog.html">
                <button>Read more</button></a>
        </div>
    </div>

<div class="services__card">
    <h2>Loving Your Neighborhood</h2>
    <p>by Deb Walkemeyer </p>
    <div class="services__btn">
        <a href="DebBlog.html">
            <button>Read more</button></a></div>
</div>

<div class="services__card">
    <h2></h2>
    <p>by Deb Walkemeyer </p>
    <div class="services__btn">
        <a href="DebBlog.html">
            <button>Read more</button></a></div>
</div>
-->
</div>
    </div>
</div>

<!--Features section -->
<div class="main" id="sign-up">
    <div class="main__container">
        <div class="main__img--container">
            <div class="main__content">
              
                <h2>Sign up today </h2>
                <p>See what makes us different</p>
                <button class="main__btn">
                    <a href="../addBlog/listBlog.php">See all blogs </a>
                </button>
            </div>
        </div>
       
    </div>


</div>
</body>
</html>