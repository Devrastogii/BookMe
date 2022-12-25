<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Navbar -->
    <section id="navbar">
        <div class="nav-container">
        <div class="nav-head">
            <h1 class="heading">BookMe</h1>
        </div>
        <div class="nav-items">
            <ul>
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="destinations.php" class="nav-link">Destinations</a></li>                
            </ul>
        </div>
        <div>
            <a href="user-profile.php" class="nav-link">Account</a>
        </div>
    </div>
    </section>

    <!-- Hero Section -->

    <section id="hero">
        <div class="hero-container">            
            <div class="hero-content" style="padding-top: 4rem;">
                <h2 class="hero-head">Explore the World</h2>
                <h2 class="hero-secondHead">With Us</h2>
                <p style="color: white; width: 27rem;">Want to explore beautiful things in the world. Well, don't worry, we are here to help you. If you are new, then click below to Sign Up.</p>
                <a href="signup.php"><button class="hero-btn" style="width: 7rem;">Get Started</button></a>
		    <a href="log-in.php"><button class="hero-btn" style="width: 7rem;">Log In</button></a>
            </div>       
        </div>
    </section>


    <!-- Best Places -->

    <section id="best-destinations">
        <div class="best-destinations">
            <div class="destination-head">
                <h2>Top Destinations</h2>
            </div>
            <div class="home-destination">

                <!-- 1 -->                
                    <div class="card">
                        <div class="destination-image">
                            <img src="mumbai.jpg" alt="" class="destination-img">
                        </div>
                        <div class="place-content">
                            <div class="place-name">
                                <p>Mumbai</p>
                                <p class="place-about">Experience monsoon in Mumbai and you will never feel like going to other places</p>
                            </div>
                        </div>
                    </div>

                <!-- 2 -->
                    <div class="card">
                        <div class="destination-image">
                            <img src="bengaluru.jpg" alt="" class="destination-img">
                        </div>
                        <div class="place-content">
                            <div class="place-name">
                                <p>Bengaluru</p>
                                <p class="place-about">Bengaluru is heaven on earth</p>
                            </div>
                        </div>
                    </div>

                <!-- 3 -->
                    <div class="card">
                        <div class="destination-image">
                            <img src="agra.jpg" alt="" class="destination-img">
                        </div>
                        <div class="place-content">
                            <div class="place-name">
                                <p>Agra</p>
                                <p class="place-about">Why is the Taj Mahal an ideal for lovers? Because they believe in sang mar mar.</p>
                            </div>
                        </div>
                    </div>                                        
            </div>
        </div>
    </section>

    <div class="view">
        <a href="destinations.php"><button class="view-btn">View More</button></a>
    </div>
<br><br><br>

    <!-- Footer -->

    <section id="footer">
        <div class="flex-footer">
            <div class="footer-content">
                <h2>BookMe</h2>
                <div style="margin-top: 1rem; line-height: 1.4rem; opacity: 0.7;">We welcome you to our <br> site where you can <br> book your trips anywhere <br> in India. We offer you <br> the best deals.</div>
            </div>
            <div class="footer-link-1">
                <h3 class="footer-head">Get To Know About Us</h3>     <br>          
                    <a class="footer-links">About US</a>
                    <a class="footer-links">Careers</a>
                    <a class="footer-links">Press Releases</a>
            </div>
            <div class="footer-link-2">
                <h3 class="footer-head">Connect With Us</h3> <br>
                    <a class="footer-links">Facebook</a>
                    <a class="footer-links">Twitter</a>
                    <a class="footer-links">Instagram</a>
            </div>
            <div class="footer-link-3">
                <h3 class="footer-head">Help</h3> <br>
                <a class="footer-links">Help Center</a>
            <a class="footer-links">Customer Care</a>
            </div>
        </div>  
        <div class="copy">
            <h3>&copy; Dev Rastogi 2022</h3>
        </div>      
    </section>
</body>
</html>