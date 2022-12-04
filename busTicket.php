<?php 
session_start();

  include("connection.php");
  include("function.php");

  $user_data = check_login($conn);

  $bus_route_id = $_GET['id'];
  $select_ticket = false;
?>

<?php include("connection.php")?>



<!DOCTYPE html>
<html>

<head>
    <title>booking page</title>
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
        margin-top: 50px;

    }

    table {
        width: 50%;
        border-collapse: separate !important;
        margin: auto;
        text-align: center;
        margin-top: 50px;
        background-color: rgb(0, 0, 0, 0);
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
        background-color: red;
        color: white;
        cursor: pointer;
        width: 50%;
    }

    button {
        padding: 5px 5px 5px 5x;
    }

    .btnPolicy {

        padding: 5px 5px 5px 5px;
        border: 2px solid yellow;
        border-radius: 7px;
        background-color: red;
        color: white;
        margin-left: 20px;
    }

    .btnPolicy:hover {

        background: red;
        padding: 7px 7px 7px 7px;
        cursor: pointer;

    }

    .idclass {

        width: 100%;
        border-radius: 3px;
        border: 1px solid;
        padding: 10px;
        outline: none;
        color: black;

    }

    .buslayout {
        width: "20%";
    }

    /* input#seat_button {
        background-image: url('logo\\busicon.png');
        background-repeat: no-repeat;
        background-size: 40px 40px;
        color: white;
        width: 100%;
        height: 100%;
        font-size: 2rem;
        background-color: rgb(0, 0, 0, 0);
        border: none;

    } */

    /* input#seat_button:hover {
        background-image: url('logo\\busicongreen.png');
        background-repeat: no-repeat;
        background-size: 40px 40px;
        color: white;
        width: 100%;
        height: 100%;
        font-size: 2rem;
        background-color: rgb(0, 0, 0, 0);
        border: none;
    } */

    .normal_button{
        background-image: url('logo\\busicon.png');
        background-repeat: no-repeat;
        background-size: 40px 40px;
        color: white;
        width: 100%;
        height: 100%;
        font-size: 2rem;
        background-color: rgb(0, 0, 0, 0);
        border: none;
    }

    .normal_button:hover{
        background-image: url('logo\\busicongreen.png');
        background-repeat: no-repeat;
        background-size: 40px 40px;
        color: white;
        width: 100%;
        height: 100%;
        font-size: 2rem;
        background-color: rgb(0, 0, 0, 0);
        border: none;
    }
    .selected_button{
        background-image: url('logo\\busiconred.png');
        background-repeat: no-repeat;
        background-size: 40px 40px;
        color: white;
        width: 100%;
        height: 100%;
        font-size: 2rem;
        background-color: rgb(0, 0, 0, 0);
        border: none;
    }
    .selected_seat{
        background-image: url('logo\\busicongreen.png');
        background-repeat: no-repeat;
        background-size: 40px 40px;
        color: white;
        width: 100%;
        height: 100%;
        font-size: 2rem;
        background-color: rgb(0, 0, 0, 0);
        border: none;
    }

    .button_class {
        background-color: orange;
        color: white;
        /* Green */
        border: none;

        padding: 15px 32px;
        text-align: center;
        align-items: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    .center_button {
        text-align: center;
    }
    </style>
    
</head>

<body>
<?php
    
    for($i = 1; $i <= 45; $i++){
    if(isset($_POST['button'.$i])) {
        $ticket_id = $i;
        $select_ticket = true;
        echo 
        ("<script LANGUAGE='JavaScript'>
        window.alert('Selected!!!');
        document.getElementById('button".$i."').setAttribute('class', 'selected_seat');
        </script>");
            
        
  ;
    }
    }


    $sqlget="SELECT * FROM ticket where route_id = '$bus_route_id'";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    echo "<script>window.onload=function(){";
    while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
    {
        $ticket_no = $row['ticket_no'];
        echo "
        
            document.getElementById('button".$ticket_no."').setAttribute('class', 'selected_button');
        
  ";

    }
    echo "}</script>";
    ?>





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
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </div>


    <div class="sidebar2">


        <h1 class="adminTopic">Select your ticket</h1>
        <form method="post">
            <?php




$divide = 4;
$inside = 2;
echo "<table border='1'>";

for($i = 1; $i <= 40; $i++){
	if($i % $divide == 1){
		echo "<tr>";
	}
	echo "<td width='15%' align='center'><input type='submit' class='normal_button' name='button".$i."' id='button".$i."' value='".$i."'></input></td>";
	if($i % $inside == 0 && $i % $divide != 0){
		echo "<td width='40%'>&nbsp;</td>";
	}
	if($i % $divide == 0){
		echo "</tr>";
	}
}
echo "<tr>";
for ($i = 41; $i <= 45; $i++) {
	echo "<td width='15%' align='center'><input type='submit' class='normal_button' name='button".$i."' id='button".$i."' value='".$i."'></input></td>";
}
echo "</tr>";
echo "</table>";

?>


        </form>

    </div>

    <div class='center_button'>
        <button onclick="myFunction()" class="button_class">

            Book

        </button>
    </div>
    <script>
    
   


    function myFunction() {
    const string2= <?php echo json_encode($select_ticket); ?>;
    var isTrueSet = (String(string2).toLowerCase() =="true");
     alert('<?php echo $ticket_id ?>');
    if(isTrueSet){
        alert("<?php echo $ticket_id ?>");
        window.location = "http://localhost/busbooking/AddBooking.php?id=<?php echo $bus_route_id ?>&tid=<?php echo $ticket_id ?>";
        
    }else{
        alert("Please select a ticket");
    }
    

    }
    </script>
</body>

</html>