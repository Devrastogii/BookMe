<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "travel";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  session_start();
  if($_POST['submit']){
    $userName = $_POST['userName'];
    $userPhone = $_POST['userPhone'];
    $email = $_POST['email'];
    $userPassword = $_POST['userPassword'];
    $userCPassword = $_POST['userCPassword'];
    $address = $_POST['address'];
    if($userName !== "" || $userPhone !== "" || $email !== "" || $userPassword !== "" || $userCPassword !== "" || $address !== ""){
      // Checking if email has already in the database
      $emailQuery = "SELECT * FROM travel_data WHERE email = '$email'";
      $check = mysqli_query($conn, $emailQuery);
      $emailCount = mysqli_num_rows($check);
      if($emailCount > 0){
        echo '<script>alert("Account already exists")</script>';
        header("Location: after-sign-error.php");
        die();
      }
      else{
        $query = "INSERT INTO travel_data VALUES('$userName','$userPhone','$email','$userPassword', '$address')";
        $data = mysqli_query($conn, $query);
        $_SESSION['email'] = $email;
        $_SESSION['userPassword'] = $userPassword;
        header("Location: index.php");
        die();
      }
    }
  }
  else {
    echo '<script>alert("Fields are blank")</script>';
    header("Location: signup.php");
    die();
    }
  mysqli_close($conn);
?>
