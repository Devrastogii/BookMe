<!-- Forward Logged In Details-->

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
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/9c2332f744.js" crossorigin="anonymous"></script>
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
            <a href="user-profile.php" class="nav-link">Account</a>
        </div>
    </div>
    </section>

    <!-- Main -->

    <div class="gradient">
    <div class="search-box">
        <form name="myForm" onsubmit="checkResult()">
        <div class="grid-1">
            <div class="relative">
                <label for="in" class="label">Check In</label>
                <input type="date" id="in" name="in" class="input" autocomplete="off">
                </div>

                <div class="relative">
                    <label for="out" class="label">Check Out</label>
                    <input type="date" id="out" name="out" class="input" autocomplete="off">
                    </div>
                    </div>

                    <br>
                <div class="grid-2">
                 <div class="relative">
                <label for="room" class="label">Rooms</label>
                <input type="number" id="room" name="room" class="input room" autocomplete="off">
                </div>

                <div class="relative">
                <label for="adult" class="label">Adults</label>
                <input type="number" id="adult" name="adult" class="input room">
                </div>

                <div class="relative">
                <label for="child" class="label">Children</label>
                <input type="number" id="child" name="child" class="input room">
                </div>
            </div>
            <p class="error">**Please fill all fields</p>
            <input class="search-btn" value="Search" onclick="showResults()" readonly>
        </div>
    </form>
    </div>
    </div>
    <br>

    <!-- Results -->

    <h2 class="search-span">Searching Best Locations For You...</h2>
    <div class="display-change">
    <div class="head-div">
    <h2 class="results-head">
        Showing Properties...
    </h2>
    <div class="all-flex">
<!-- 1 -->
    <div class="result-card">
        <div class="hotel-img">
            <img src="hotel1.jpg" class="setDimension">
        </div>
        <div class="hotel-content">
        <div class="flex-hotel-content">
            <div class="rating">4.4</div>
            <div class="rate-margin">Excellent</div>
            <div class="rate-margin">(1102 Ratings)</div>
        </div>

        <div class="name-content">
            <h3>Mongas Hotel and Resort</h3>
            <p class="name-location">300m from center</p>
            <p class="name-facility">
                <ul class="facility-list">
                    <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                    <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                    <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
                </ul>
            </p>
            <br>
            <hr>
            <p class="price-tag">
                ₹<span class="room-price">11050 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
            </p>
            <div id="book-hotel-btn">
                <a href="payment.php"><button id="0" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
            </div>
        </div>
    </div>
</div>
<!-- 2 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel2.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">4.1</div>
        <div class="rate-margin">Very Good</div>
        <div class="rate-margin">(1166 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>Alps Resort</h3>
        <p class="name-location">400m from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">10050 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="1" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>
<!-- 3 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel3.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">4.3</div>
        <div class="rate-margin">Excellent</div>
        <div class="rate-margin">(230 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>SS International</h3>
        <p class="name-location">450m from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">12550 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="2" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>
<!-- 4 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel4.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">3.8</div>
        <div class="rate-margin">Very Good</div>
        <div class="rate-margin">(89 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>Grace Mount IN</h3>
        <p class="name-location">300m from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">6050 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="3" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>
<!-- 5 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel5.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">3.7</div>
        <div class="rate-margin">Very Good</div>
        <div class="rate-margin">(12 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>City IN</h3>
        <p class="name-location">500m from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">7050 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="4" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>
<!-- 6 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel6.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">3.6</div>
        <div class="rate-margin">Very Good</div>
        <div class="rate-margin">(16 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>Hotel S1 by Vivo Hotels</h3>
        <p class="name-location">550m from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">6050 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="5" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>
<!-- 7 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel7.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">3.3</div>
        <div class="rate-margin">Good</div>
        <div class="rate-margin">(110 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>Satyam</h3>
        <p class="name-location">900m from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">5050 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="6" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>
<!-- 8 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel8.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">3.2</div>
        <div class="rate-margin">Good</div>
        <div class="rate-margin">(130 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>Hotel Kings</h3>
        <p class="name-location">1km from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">4050 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="7" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>
<!-- 9 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel9.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">3.8</div>
        <div class="rate-margin">Very Good</div>
        <div class="rate-margin">(235 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>Mohan Palace Dalhousie</h3>
        <p class="name-location">1.5km from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">6550 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="8" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>
<!-- 10 -->
<div class="result-card">
    <div class="hotel-img">
        <img src="hotel10.jpg" alt="" class="setDimension">
    </div>
    <div class="hotel-content">
    <div class="flex-hotel-content">
        <div class="rating">3.9</div>
        <div class="rate-margin">Very Good</div>
        <div class="rate-margin">(12 Ratings)</div>
    </div>

    <div class="name-content">
        <h3>Hotel Megha View</h3>
        <p class="name-location">2km from center</p>
        <p class="name-facility">
            <ul class="facility-list">
                <li><i class="fa-solid fa-check icon"></i>Breakfast Included</li>
                <li><i class="fa-solid fa-check icon"></i>Free Wifi</li>
                <li><i class="fa-solid fa-check icon"></i>Basic Amenities</li>
            </ul>
        </p>
        <br>
        <hr>
        <p class="price-tag">
            ₹<span class="room-price">9050 </span> <span class="tax">+ ₹</span><span class="tax tax-amount"> 2300 </span> <span class="tax"> taxes and fees / per night</span>
        </p>
        <div id="book-hotel-btn">
            <a href="payment.php"><button id="9" class="book-hotel-btn" onclick="checkBooking(this.id)">Book Now</button></a>
        </div>
    </div>
</div>
</div>

    </div>
</div>
</div>
<script src="book.js"></script>
</body>
</html>
