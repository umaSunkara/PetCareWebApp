<?php
    include('../includes/connect.php');
    include('../functions/commonfunc.php');
    session_start();
    if(isset($_GET['order_id']))
    {
        $oid=$_GET['order_id'];
        $selec_data="select * from user_orders where order_id =$oid";
    $res=mysqli_query($con,$selec_data);
    $row=mysqli_fetch_assoc($res);
    $invoice=$row['invoice_number'];
    $amt_due=$row['amount'];
    }
    
    if(isset($_POST['confirm_payment']))
    {
        $invoice_no=$_POST['invoice_number'];
        $amt=$_POST['amount'];
        $mode=$_POST['payment_mode'];
$insert_q="insert into user_payments (order_id,invoice_number,amount,payment_mode) values ($oid,$invoice_no,$amt,'$mode')";
        $result=mysqli_query($con,$insert_q);
        if($result)
        {
            echo "<h3 class='text-center text-succesful'>Payment Successful</h3>";
            echo "<script>window.open('profile.php?my_orders','_self')</script>";
        }
        $upd_q="update user_orders set order_status='Complete' where order_id=$oid";
        $res_orders=mysqli_query($con,$upd_q);

    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Page</title>
    </head>
    <body class="bg-secondary">
        <div class="container mb-5 mt-5 text-center">
            <h1>Confirm Payment</h1>
            <form action="" method="post">
                <div class="form-outline my-4 text-center w-50 m-auto">
                    <input type="text" class="form-control w-50 m-auto" name="invoice_number" value=<?php echo $invoice;?>>

                </div>
                <div class="form-outline mt-5 my-4 text-center w-50 m-auto">
                    <label for="amount" class="text-light">Amount</label>
                    <input type="text" class="form-control w-50 m-auto" value=<?php echo $amt_due;?> name="amount">

                </div>
                <div class="form-outline mt-5 my-4 text-center w-50 m-auto">
                   
                <select type="text" name="payment_mode" class="form-select w-50 mt-5">
                        <option value="">Select Payment Mode</option>
                        <option value="UPI">UPI</option>
                        <option value="Net Banking">Net Banking</option>
                        <option value="PayPal">PayPal</option>
                        <option value="COD">COD</option>
                    </section>

                </div><br>
                <div class="form-outline my-4 text-center w-50 m-auto">
                    <input type="submit" class="bg-info py-2 px-3 border-0 p-2" name="confirm_payment" value="Confirm">

                </div>
            </form>
        </div>
        
    </body>
    </html>