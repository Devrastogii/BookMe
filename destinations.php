<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "travel";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  session_start();
  $email = $_SESSION['email'];
  $userPassword = $_SESSION['userPassword'];
  $_SESSION['email'] = $email;
  $_SESSION['userPassword'] = $userPassword;
  $sql = "SELECT * FROM Destination";
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
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
                <li><a href="#" class="nav-link">Destinations</a></li>               
            </ul>
        </div>
        <div>
            <a href="user-profile.php" class="nav-link">Account</a>
        </div>
    </div>
    </section>

    <!-- Destinations -->

    <section id="best-destinations">
        <div class="best-destinations">
            <div class="destination-head">
                <h2>Top Destinations</h2>
            </div>
            <div class="destination-card">

              <?php
                  // LOOP TILL END OF DATA
                  while($rows=$result->fetch_assoc())
                  {
              ?>

              <div class="card">
                  <div class="destination-image">
                      <img src="<?php echo $rows['image'];?>" class="destination-img">
                  </div>
                  <div class="place-content">
                      <div class="place-name">
                          <p><?php echo $rows['name'];?></p>
                          <p class="place-about"><?php echo $rows['about'];?></p>
                      </div>
                      <div>
                          <a href="book.php"><button class="place-btn">See Details</button></a>
                      </div>
                  </div>
              </div>

              <?php
                  }
              ?>

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
</body>
</html>
