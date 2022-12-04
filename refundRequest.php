<?php 

	session_start();


?>
<?php include("connection.php")?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssfile/sidebar.css">
</head>

<body>
    <!--
   <?php //echo "welcome:".  $_SESSION['username']; ?>
   <a href="adminLogout.php"><button class="btnHome">logout</button></a>-->

</body>

</html>




<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel of Bus Services</title>
    <style type="text/css">
    body {

        background: #373d65;
        background-position: center;
        background-size: cover;
        height: 700px;
        background-repeat: no-repeat;
        background-attachment: fixed;

    }

    .adminTopic {
        text-align: center;
        color: #fff;
        margin-top: 100px;

    }

    table {
        width: 99%;
        border-collapse: separate !important;
        margin: auto;
        text-align: center;
        margin-top: 50px;
        background-color: rgb(255, 255, 255);
        border-radius: 10px 10px 0px 0px;

    }

    table th {
        border-bottom: 2px solid rgb(187, 187, 187);
        padding: 10px 0px 10px 0px;
        font-family: "balsamiq_sansitalic" !important;
    }

    table tr td {
        border-right: 2px solid rgb(187, 187, 187);
        height: 58px;
        padding: 22px 0px 0px 0px;
        font-family: "monospace;" !important;
        border-bottom: 2px solid rgb(187, 187, 187);
        font-size: 20px;
    }

    table tr td a {
        color: white;
        border-radius: 5px;
        padding: 6px;
        text-decoration: none;
        margin: 10px;
        font-weight: 700;
    }

    table tr td button:hover {

        padding: 5px 5px 5px 5px;
        border: 2px solid yellow;
        border-radius: 7px;
        background-color: orange;
        color: white;
        cursor: pointer;
    }

    button {
        padding: 5px 5px 5px 5x;
    }

    .btnPolicy {

        padding: 5px 5px 5px 5px;
        border: 2px solid yellow;
        border-radius: 7px;
        background-color: orange;
        color: white;
        margin-left: 20px;
    }

    .btnPolicy:hover {

        background: orange;
        padding: 7px 7px 7px 7px;
        cursor: pointer;

    }
    </style>
</head>

<body>
    <input type="checkbox" id="check">

    <label for="check">
        <i class="fa fa-bars" id="btn"></i>
        <i class="fa fa-times" id="cancle"></i>


    </label>
    <div class="sidebar">
        <header><img src="image/Re.png">
            <p><?php echo $_SESSION['username']; ?></p>
        </header>
        <ul>
            <li><a href="adminDash.php">Manage Routes</a></li>
            <li><a href="ManagesBuses.php">Manage Buses</a></li>
            <li><a href="BookingManage.php">Booking People</a></li>
            <li><a href="PaymentManage.php">Transaction</a></li>
            <li><a href="refundRequest.php">Refund Requests</a></li>
            <li><a href="adminLogout.php">logout</a></li>
        </ul>
    </div>
    <div class="sidebar2">
        <h1 class="adminTopic">Manage refund of Buses</h1>
        <?php

    
    $sqlget="SELECT * FROM refund";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>username</th>
    <th>Ticket No</th>
    <th>Route Id</th>
    <th>Refund Status</th>
    <th>Operation</th>

   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['username'];
        echo "</td><td>";
        echo $row['ticket_no'];
        echo "</td><td>";
        echo $row['route_id'];
        echo "</td><td>";
        echo $row['refund_status'];
        echo "</td>";
       
          
        ?>

        <td>

            <button style="border:2px solid yellow; border-radius:7px; background-color:orange;color:white;">
                <a href="updateRoute.php">
                    Approve
                </a>

            </button>

            <button style="border:2px solid yellow; border-radius:7px; background-color:orange;color:white;">
                <a href="deleteRoute.php">

                   Cancel

                </a>
            </button>

        </td>
        </tr>

        <?php
       }

       echo "</table>";
?>
        <br>
      
    </div>

</body>

</html>