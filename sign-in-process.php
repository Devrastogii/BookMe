<?php
    echo "<br>";
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "travel";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    session_start();
    if($_POST['submit']){
        $email = $_POST['email'];
        $userPassword = $_POST['userPassword'];
        if($email !== "" || $userPassword !== ""){
          $query = "SELECT email, userPassword FROM travel_data WHERE email = '$email'";
          $check = mysqli_query($conn, $query);
          if(mysqli_num_rows($check) == 0){
              ?>
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
                <div class="account-error">
                <p style="font-size: 1.9rem;">Account doesn't exist !!</p>
                <a href="log-in.php"><button class="error-link">Log In</button></a>
                </div>
              </body>
              </html>

              <?php
          }
          else{
            $query = "SELECT email, userPassword FROM travel_data WHERE email = '$email' AND userPassword = '$userPassword'";
            $check = mysqli_query($conn, $query);
            if(mysqli_num_rows($check) == 0){
              ?>
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
                <div class="account-error">
                <p style="font-size: 1.9rem;">Incorrect Password !!</p>
                <a href="log-in.php"><button class="error-link">Log In</button></a>
                </div>
              </body>
              </html>

              <?php
            }
            else{
              $_SESSION['email'] = $email;
              $_SESSION['userPassword'] = $userPassword;
              header("Location: index.php");
              die();
            }
          }
        }
      }
    else {
      echo '<script>alert("Fields are blank")</script>';
      header("Location: sign-up.php");
      die();
    }
    mysqli_close($conn);
?>
