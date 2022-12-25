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
            <a href="#" class="nav-link">Sign Up</a>
        </div>
    </div>
    </section>


<!-- Form -->
<section id="form">
  <div class="form">
    <div class="form-content">
      <h2 style="text-align: center;">Sign Up</h2>
        <form action="insert.php" onsubmit="return(validate())" method="POST" name="myForm">
          <!-- Name -->
          <div class="relative">
          <label for="name" class="label">Full Name</label>
          <input type="text" id="name" name="userName" class="input" autocomplete="off" required>
          <span id="Username_error" class="red_error"></span>
          </div>

          <!-- Phone -->
          <div class="relative">
          <label for="phone" class="label">Phone Number</label>
          <input type="text" id="phone" name="userPhone" class="input" autocomplete="off" required>
          <span id="Phone_error" class="red_error"></span>
          </div>

          <!-- Email -->
          <div class="relative">
          <label for="email" class="label">Email Address</label>
          <input type="email" id="email" name="email" class="input" autocomplete="off" required>
          <span id="Username_error" class="red_error"></span>
          </div>

          <div class="relative">
          <label for="pwd" class="label">Password</label>
          <input type="password" id="pwd" name="userPassword" class="input" required>
          <span id="Password_error" class="red_error"></span>
          </div>
          <div class="relative">
          <label for="cpwd" class="label">Confirm Password</label>
          <input type="password" id="cpwd" name="userCPassword" class="input" required>
          <span id="Confirm_password_error" class="red_error"></span>
          </div>

          <div class="relative mb-4">
          <label for="message" class="label">Address</label>
          <textarea id="message" name="address" class="textarea" required></textarea>
          </div>

          <div class="form-btn">
          <input type="submit" name="submit" value="Sign Up" class="btn">
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

<script type="text/javascript">
  function validate() {
    var letters = /^[a-zA-z ]+$/;
    var digits = /^[0-9]+$/;

    if (!(document.myForm.userName.value.match(letters))){
      document.getElementById("Username_error").innerHTML = "**Name Should Contain Alphabets Only";
      document.myForm.userName.focus();
      return false;
    }
    document.getElementById("Username_error").innerHTML = "";

    if (!document.myForm.userPhone.value.match(digits)) {
      document.getElementById("Phone_error").innerHTML = "**Phone Number should contain digits only";
      document.myForm.userPhone.focus();
      return false;
    }
    document.getElementById("Phone_error").innerHTML = "";

    if (!(document.myForm.userPhone.value.length == 10)) {
      document.getElementById("Phone_error").innerHTML = "**Phone Number should contain 10 digits only";
      document.myForm.userPhone.focus();
      return false;
    }
    document.getElementById("Phone_error").innerHTML = "";

    if (!(document.myForm.userPassword.value.length == 8 )) {
      document.getElementById("Password_error").innerHTML = "**Password length should be of 8 characters";
      document.myForm.userPassword.focus();
      return false;
    }
    document.getElementById("Password_error").innerHTML = "";

    if (document.myForm.userCPassword.value != document.myForm.userPassword.value) {
      document.getElementById("Confirm_password_error").innerHTML = "**Error in password verification";
      document.myForm.userCPassword.focus();
      return false;
    }
    document.getElementById("Confirm_password_error").innerHTML = "";
  }
</script>

</body>
</html>
