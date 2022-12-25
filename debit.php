<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "travel";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  session_start();
  if($_POST['submit']){
  $email = $_SESSION['email'];
  $userPassword = $_SESSION['userPassword'];
  $_SESSION['email'] = $email;
  $_SESSION['userPassword'] = $userPassword;
  $total =  $_POST['totalamount'];
  $CNumber = $_POST['card'];
  $CVV = $_POST['cvv'];
  $pDate = $_POST['pdate'];
  $eDate = $_POST['edate'];
  }
  $sql = "INSERT INTO debit_card_payment VALUES('$email', '$CNumber', '$CVV', '$pDate', '$eDate', '$total')";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
  </head>
  <body>
    <div style="display: flex; justify-content: center; align-items: center;width: 100%; height: 30rem; flex-direction: column;">
    <h2>TRIP BOOKED SUCCESSFULLY!</h2>
    <h2 style="margin-top: 0.8rem;">HAVE A SAFE TRIP</h2>
    <a href="index.php" style="margin-top: 0.8rem;"><button class="error-link"> GO BACK </button></a>
    </div>
  </body>
</html>
