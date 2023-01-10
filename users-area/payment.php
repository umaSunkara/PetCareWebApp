<!DOCTYPE html>
<html lang="en">
<?php
include('../includes/connect.php');
include('../functions/commonfunc.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    img 
    {
        width:50%;
    }
    </style>
</head>
<body>
    <?php
    $u_ip= getIPAddress();
    $get_u="select * from user_table where user_ip='$u_ip'";
    $res=mysqli_query($con,$get_u);
    $run=mysqli_fetch_array($res);
    $id=$run['user_id'];
    ?>
<div class="container">
    <h2 class="text-center text-info">
        Payment Options
        <div class="row d-flex justify-content-center align-items-center m-5 p-7">
            <div class="col md-6">
            <a href="https://www.paypal.com" target="_blank"><img src="../images/upi.jpg" ></a>
            </div>
            <div class="col md-6">
            <a href="order.php?user_id=<?php echo $id?>" ><h2>Pay Offline</h2></a>
            </div>
            
        </div>
    </h2>
</div>
</body>
</html>