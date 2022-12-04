<?php 
	session_start();


    include("connection.php");
    include("function.php");

    $user_data = check_login($conn);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssfile/sidebar.css">
    <link rel="stylesheet" href="cssfile/signUp.css">
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


    }

    .form_wrap .submit_btn:hover {

        color: #fff;
        font-weight: 600;

    }

    #decription {
        width: 100%;
        border-radius: 3px;
        border: 1px solid #9597a6;
        padding: 10px;
        outline: none;
        color: black;
    }

    .idclass {

        width: 100%;
        border-radius: 3px;
        border: 1px solid #9597a6;
        padding: 10px;
        outline: none;
        color: black;

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
            <p><?php echo $user_data['username'];?></p>
        </header>
        <ul>


            <li><a href="viewBus.php">Ticket Booking</a></li>
            <li><a href="bookedTickets.php">Booked History</li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </div>
    <?php 

       if(isset($_POST['updateBooking'])){

     $id=$_POST['id'];  
     $passenger=$_POST['passenger_name'];
     $tel=$_POST['tel'];
     $email=$_POST['email'];
     $board_place=$_POST['board_place'];
     $desti=$_POST['Your_destination'];

       $query="UPDATE `booking` SET passenger_name='$passenger',telephone='$tel',email='$email',boarding_place='$board_place',Your_destination='$desti' where id=$id";


       $query_run=mysqli_query($conn,$query);

         if($query_run){

              echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Booking Updated!!!');
    window.location.href='BookingManage.php';
    </script>");


          }

          else{

               echo '<script type="text/javascript">alert("Booking not updated!!!")</script>';
           }

           

     }

?>

    <div class="sidebar2">

        <div class="wrapper">
            <div class="registration_form">
                <div class="title">
                    Passenger Ticket
                </div>

                <form action="#" method="POST">
                    <div class="form_wrap">


                        <div class="input_wrap">
                            <label for="title">Username</label>
                            <input type="text" id="title" name="id" class="idclass"
                                value="<?php echo $user_data['username'];?>">

                            <label for="title">Ticket Id</label>
                            <input type="number" id="title" name="ticket" class="idclass"
                                value="<?php echo $_GET['tid'];?>">

                            <label for="title">Route Id</label>
                            <input type="text" id="title" name="route" class="idclass"
                                value="<?php echo $_GET['rid'];?>">


                        </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>