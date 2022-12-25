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
  $sql1 = "SELECT * FROM credit_card_payment WHERE email = '$email'";
  $sql2 = "SELECT * FROM debit_card_payment WHERE email = '$email'";
  $sql3 = "SELECT * FROM paytm_payment WHERE email = '$email'";
  $sql4 = "SELECT * FROM gpay_payment WHERE email = '$email'";
  $result1 = mysqli_query($conn, $sql1);
  $result2 = mysqli_query($conn, $sql2);
  $result3 = mysqli_query($conn, $sql3);
  $result4 = mysqli_query($conn, $sql4);
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View-Trips</title>
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
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        h2 {
            text-align: center;
            color: black;
            font-size: large;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
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
        <div class="user" style="height: auto;">
        <h1>Trip Details</h1><br>       
        <h2>Payments by credit card</h2>
        <table style="margin-top: 1.5rem;">
            <tr>
                <th>Email</th>
                <th>Card Number</th>
                <th>Amount</th>
            </tr>           
            <?php               
                while($rows=$result1->fetch_assoc())
                {
            ?>
            <tr>            
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['CNumber'];?></td>
                <td><?php echo $rows['amount'];?></td>
            </tr>
            <?php
                }
            ?>
        </table><br>
        <h2>Payments by debit card</h2>
        <table style="margin-top: 1.5rem;">
            <tr>
                <th>Email</th>
                <th>Card Number</th>
                <th>Amount</th>
            </tr>           
            <?php               
                while($rows=$result2->fetch_assoc())
                {
            ?>
            <tr>               
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['CNumber'];?></td>
                <td><?php echo $rows['amount'];?></td>
            </tr>
            <?php
                }
            ?>
        </table><br>
        <h2>Payments by PayTM</h2>
        <table style="margin-top: 1.5rem;">
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>UPI ID</th>
                <th>Amount</th>
            </tr>          
            <?php                
                while($rows=$result3->fetch_assoc())
                {
            ?>
            <tr>              
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['upi'];?></td>
                <td><?php echo $rows['amount'];?></td>
            </tr>
            <?php
                }
            ?>
        </table><br>
        <h2>Payments by GPay</h2>
        <table style="margin-top: 1.5rem;">
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>UPI ID</th>
                <th>Amount</th>
            </tr>           
            <?php             
                while($rows=$result4->fetch_assoc())
                {
            ?>
            <tr>              
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['upi'];?></td>
                <td><?php echo $rows['amount'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <a href="index.php"><button class="error-link" style="font-size: 1rem;width: 8rem;">Home Page</button></a>
        </div>
    </section>
</body>

</html>
