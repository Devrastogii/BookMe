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
                <li><a href="destinations.php" class="nav-link">Destinations</a></li>                
            </ul>
        </div>
        <div>
            <a href="user-profile.php" class="nav-link">Account</a>
        </div>
    </div>
    </section>

    <!-- Payment Section -->
    <div class="pay-head">
        <h2 class="pay-heading">
            Payment Gateway
        </h2>
    </div>

    <!-- Select Method -->
    <div class="cover-div">
        <div class="color-div">
        <div class="method-head">
            <p>Select Payment Method</p>
        </div>
        <div class="flex-method">
            <div class="credit">
                <button class="card-box active-btn" id="cdt">
                    <img src="credit.png" alt="" class="pay-image">
                </button>
                <p class="method-text">Credit Card</p>
            </div>
            <div class="paytm">
                <button class="card-box" id="paytm">
                    <img src="paytm.jpg" alt="" class="pay-image">
                </button>
                <p class="method-text setMargin1">PayTM</p>
            </div>
            <div class="debit">
                <button class="card-box" id="debit">
                    <img src="debit.jpg" alt="" class="pay-image">
                </button>
                <p class="method-text">Debit Card</p>
            </div>
            <div class="gpay">
                <button class="card-box" id="gpay">
                    <img src="gpay.jpg" alt="" class="pay-image">
                </button>
                <p class="method-text setMargin2">GPay</p>
            </div>
        </div>
    </div>
    </div>

    <!-- Price Chart -->
        <div class="price-box-content">
            <div class="amount-head">
                <h2>Price Chart</h2>
            </div>
            <div class="amount-grid">
                <div class="amount-name">
                    <h3>Category</h3>
                    <p class="marginTop">1. Adults</p>
                    <p style=" padding-bottom: 0.2rem;">2. Children</p>
                    <p>3. Rooms</p>
                </div>
                <div class="pay-price">
                    <h3>Price</h3>
                    <p class="marginTop">₹1,200</p>
                    <p style=" padding-bottom: 0.2rem;">₹800</p>
                    <p class="currentRoomPrice"></p>
                </div>
            </div>
        </div>

    <!-- Amount Section -->
    <span class="amount-box">
        <div class="amount-box-content">
            <div class="amount-head">
                <h2>Total Amount</h2>
            </div>
            <div class="amount-grid">
                <div class="amount-name">
                    <h3>Category</h3>
                    <p class="marginTop">1. Adults</p>
                    <p style=" padding-bottom: 0.2rem;">2. Children</p>
                    <p style=" padding-bottom: 0.2rem;">3. Rooms</p>
                    <p style="padding-bottom: 0.8rem; border-bottom: 0.1rem solid black;">3. Taxes</p>
                    <h4 style="margin-top: 0.8rem;">Total</h4>
                </div>
                <div class="pay-price">
                    <h3>Price</h3>
                    <p class="adultPrice marginTop"></p>
                    <p class="childPrice" style=" padding-bottom: 0.2rem;"></p>
                    <p class="romPrice" style=" padding-bottom: 0.2rem;"></p>
                    <p style="padding-bottom: 0.8rem; border-bottom: 0.1rem solid black; width: 3.5rem;"><span>₹</span><span class="taxCount">2,300</span></p>
                    <p class="total" style="margin-top: 0.8rem;"></p>
                </div>
            </div>
        </div>
    </span>

    <!-- Credit Card -->
    <div class="cover-div credit-display cdt">
        <div class="credit-div">
            <form action="credit.php" name="myForm" method="POST">
            <div class="relative">
                <label for="in" class="label">Card Number</label>
                <input type="text" id="in" name="card" class="input card-num" autocomplete="off" placeholder="XXXX-XXXX-XXXX">
            </div>
            <div class="credit-grid">
                <div>
                  <input type="hidden" id="totalamount1" name="totalamount"></input>
                    <div class="relative">
                        <label for="in" class="label">CVV</label><br>
                        <input type="text" id="in" name="cvv" class="input card-input" autocomplete="off" placeholder="XXX">
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <label for="in" class="label">Expiry Date</label><br>
                        <input type="date" id="in" name="pdate" class="input card-input" autocomplete="off"> / <input type="date" id="in" name="edate" class="input card-input" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="pay-btn-div">
            <input class="pay-btn" readonly value="Make Payment" type="submit" name="submit">
        </div>
    </form>
        </div>
    </div>


    <!-- PayTM -->
    <div class="cover-div credit-display paytm">
        <div class="credit-div">
            <form action="paytm.php" name="myForm" method="POST">
            <div class="relative">
                <label for="in" class="label">Name</label>
                <input type="text" id="in" name="name" class="input card-num" autocomplete="off">
            </div>
            <input type="hidden" id="totalamount2" name="totalamount"></input>
                    <div class="relative">
                        <label for="in" class="label">UPI ID</label><br>
                        <input type="text" id="in" name="upi" class="input card-num" autocomplete="off" placeholder="phone@upi">
                    </div>
                    <div class="pay-btn-div">
                        <input class="pay-btn" readonly value="Make Payment" type="submit" name="submit">
                    </div>
                    </form>
        </div>
    </div>

    <!-- Debit Card -->
    <div class="cover-div credit-display debit">
        <div class="credit-div">
            <form action="debit.php" name="myForm" method="POST">
            <div class="relative">
                <label for="in" class="label">Card Number</label>
                <input type="text" id="in" name="card" class="input card-num" autocomplete="off" placeholder="XXXX-XXXX-XXXX">
            </div>
            <div class="credit-grid">
                <div>
                  <input type="hidden" id="totalamount3" name="totalamount"></input>
                    <div class="relative">
                        <label for="in" class="label">CVV</label><br>
                        <input type="number" id="in" name="cvv" class="input card-input" autocomplete="off" placeholder="XXX">
                    </div>
                </div>
                
                <div>
                    <div class="relative">
                        <label for="in" class="label">Expiry Date</label><br>
                        <input type="date" id="in" name="pdate" class="input card-input" autocomplete="off"> / <input type="date" id="in" name="edate" class="input card-input" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="pay-btn-div">
                <input class="pay-btn" readonly value="Make Payment"  type="submit" name="submit">
            </div>
            </form>
        </div>
    </div>

    <!-- GPay -->
    <div class="cover-div credit-display gpay">
        <div class="credit-div">
            <form action="gpay.php" name="myForm" method="POST">
            <div class="relative">
                <label for="in" class="label">Name</label>
                <input type="text" id="in" name="name" class="input card-num" autocomplete="off">
            </div>
            <input type="hidden" id="totalamount4" name="totalamount"></input>
                    <div class="relative">
                        <label for="in" class="label">UPI ID</label><br>
                        <input type="text" id="in" name="upi" class="input card-num" autocomplete="off" placeholder="phone@upi">
                    </div>
                    <div class="pay-btn-div">
                        <input class="pay-btn" readonly value="Make Payment"  type="submit" name="submit">
                    </div>
                    </form>
        </div>
    </div>
    <br><br>

    <script src="payment.js"></script>
</body>
</html>
