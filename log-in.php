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
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="destinations.php" class="nav-link">Destinations</a></li>             
            </ul>
        </div>
        <div>
            <a href="signup.php" class="nav-link">Sign Up</a>
        </div>
    </div>
    </section>

    <!-- Form -->
    <section id="last-one">
        <div class="form" style="margin-top: 2rem;">
            <div class="form-content">
                <h2 style="text-align: center;">Log In</h2>
            <form action="sign-in-process.php" method="POST" name="myForm" onsubmit="return validate()">

            <!-- Email -->
            <div class="relative">
            <label for="email" class="label">Email Address</label>
            <input type="text" id="email" name="email" class="input" autocomplete="off" required>
            </div>

            <div class="relative">
            <label for="pwd" class="label">Password</label>
            <input type="password" id="pwd" name="userPassword" class="input" required autocomplete="off"> 
            <span id="Password_error" class="red_error"></span>           
            </div>

            <div class="form-btn">
            <input type="submit" name="submit" value="Log In" class="btn">
            </div>
            </form>
            </div>
        </div>
    </section>

     <!-- Footer -->

     <section id="footer">
        <div class="flex-footer">
            <div class="footer-content">
                <h2>BookMe</h2>
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

    <script>
        function validate(){
          if (!(document.myForm.userPassword.value.length == 8 )) {
      document.getElementById("Password_error").innerHTML = "**Password length should be of 8 characters";
      document.myForm.userPassword.focus();
      return false;
    }
    document.getElementById("Password_error").innerHTML = "";
}

    </script>
</body>
</html>
