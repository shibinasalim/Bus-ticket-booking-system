<?php

session_start();

include("connection.php");
include("function.php");

$user_data = check_login($conn);

$username = $user_data['username'];
$ticket = $_GET['tid'];
$route_id = $_GET['rid'];


if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {

            $status = "Not Approved";

              $stmt=$conn->prepare("INSERT INTO refund(username,ticket_no,route_id,refund_status) VALUES(?,?,?,?)");
              $stmt->bind_param("ssss",$username,$ticket,$route_id,$status);
              $stmt->execute();
              
                         echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully applied for refund!!!');
                window.location.href='viewBus.php';
                </script>");
              
               

              $stmt->close();
              $conn->close();


            }
                






?>