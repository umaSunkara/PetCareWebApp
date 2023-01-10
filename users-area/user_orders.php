
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Page</title>
</head>
<body>
    <?php
    $username=$_SESSION['username'];
    $get_user="select * from user_table where username='$username'";
    $res=mysqli_query($con,$get_user);
    $row_f=mysqli_fetch_assoc($res);
    $uid=$row_f['user_id'];
    //echo $uid;
    ?>
<h3 class="text-success">All My Orders</h3>
<table class="table table-bordered mt-5">
    <tr>
        <thead class="bg-info">
        <th>Serial No</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice</th>
        <th>Date</th>
        <th>Incomplete/complte</th>
        <th>Status</th>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            $get_details="select * from user_orders where user_id=$uid";
            $result=mysqli_query($con,$get_details);
            $n=1;
            while($row=mysqli_fetch_assoc($result))
            {
                $oid=$row['order_id'];
                $amt=$row['amount'];
                $total_p=$row['total_products'];
                $invoice=$row['invoice_number'];
                $status=$row['order_status'];
                
                if($status=='pending')
                {
                    $status='Incomplete';
                }
                else
                {
                    $status='Complete';
                }
                $date=$row['order_date'];
                
                echo "<tr>
                <th>$n</th>
                <th>$amt</th>
                <th>$total_p</th>
                <th>$invoice</th>
                <th>$date</th>
                <th>$status</th>";
                $n+=1;
                ?>
                <?php 
                if($status=='Complete')
                {
                    echo "<td>Paid</td>";
                }
                else{
                    echo "<th><a href='confirm_payment.php?order_id=$oid' class='text-light'>Confirm</a></th></tr>";
                }
            }
                
                ?>
                
                
            
            
                
          
            

            
        </tbody>
        
    </tr>

</table>
</body>
</html>