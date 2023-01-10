<h3 class="text-center text-success">All Payments</h3>
<table class="table table-bordered m-5">
    <thead class="bg-info text-center">
        <?php
        $get_o="select * from user_payments";
        $res=mysqli_query($con,$get_o);
        $cnt=mysqli_num_rows($res);
        
        if($cnt==0)
        {
            echo "
            <div class='text-center'><h2 class='text center text-successful'>No Pending Payments<h2></div>";
        }
        else
        {
            $cnt=1;
            echo "
        <tr>
        <th>Serial No</th>
        <th>Invoice Number</th>
        <th>Amount</th>
        <th>Payment Mode</th>
        <th>Order Date</th>
        <th>Delete</th>
    </tr>
    <tbody class='bg-secondary text-center text-light'>
        ";
            while($row=mysqli_fetch_assoc($res))
            {
                $pid=$row['payment_id'];
                $amt=$row['amount'];
                $inv=$row['invoice_number'];
                $mode=$row['payment_mode'];
                $date=$row['date'];
                
                echo "
                <tr>
                <td>$cnt</td>
                
                <td>$inv</td>
                <td>$amt</td>
                
                <td>$mode</td>
                <td>$date</td>
                
                <td><a href='index.php?delete_payment=$pid' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
            </tr>
            
                ";
                $cnt++;


            }
        }
        ?>
        
            
        </tbody>
    </thead>
</table>