<?php 
session_start();

  include("connection.php");
  include("function.php");

  $user_data = check_login($conn);
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssfile/payment.css">

</head>

<body>

    <?php

  if(isset($_POST['checkout'])){


     $name=$_POST['name'];
     $email=$_POST['email'];
        $cname=$_POST['cardName'];
     $cnumber=$_POST['cardNumber'];
     $expM=$_POST['expM'];
     $expY=$_POST['expYear'];
     $cvv=$_POST['cvv'];
     $amount=$_POST['amount'];


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {

              $stmt=$conn->prepare("INSERT INTO payment(amount,name,email,card_name,card_number,exp_month,exp_year,cvv) VALUES(?,?,?,?,?,?,?,?)");

              $stmt->bind_param("isssssis",$amount,$name,$email,$cname,$cnumber, $expM,$expY,$cvv);

              $stmt->execute();
                          
                           echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully added!!!');
                window.location.href='paySucess.php';
                </script>");

              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>
    <div class="container">

        <form method="POST">

            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>Amount You Pay :</span>
                        <input type="number" value=" " name="amount">
                    </div>

                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" value="<?php echo $user_data['username'];?>" name="name">
                    </div>

                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" value="<?php echo $user_data['email'];?>" name="email">
                    </div>
                   
                   

                              
                    

                </div>

                <div class="col">

                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="image/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="mr. john deo" name="cardName" required>
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444" name="cardNumber" required>
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="january" name="expM" required>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="2022" name="expYear" required>
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="123" name="cvv" required>
                        </div>
                    </div>

                </div>

            </div>

            <input type="submit" value="proceed to checkout" class="submit-btn" name="checkout">

        </form>

    </div>

</body>

</html>