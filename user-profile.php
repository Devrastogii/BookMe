<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "travel";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  session_start();
  $email = $_SESSION['email'];
  $userPassword = $_SESSION['userPassword'];
  $sql = "SELECT * FROM travel_data WHERE email = '$email' AND userPassword = '$userPassword'";
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User-Profile</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        h1 {
            text-align: center;
            color: black;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        td {
            background-color: rgb(208, 234, 250);           
        }
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <section>
        <div class="user">
        <h1>User Details</h1>        
        <table style="margin-top: 1.5rem;">
            <tr>
                <th>Username</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            <?php               
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>               
                <td><?php echo $rows['userName'];?></td>
                <td><?php echo $rows['userPhone'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['address'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <a href="index.php"><button class="error-link" style="font-size: 1rem;width: 8rem;">Home Page</button></a>
        <a href="view-trips.php"><button class="error-link" style="font-size: 1rem;width: 8rem;">View All Payments</button></a>
        </div>
    </section>
</body>

</html>
