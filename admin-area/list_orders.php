<h3 class="text-center text-success">All Orders</h3>
<table class="table table-bordered m-5">
    <thead class="bg-info text-center">
        <?php
        $get_o="select * from user_orders";
        $res=mysqli_query($con,$get_o);
        $cnt=mysqli_num_rows($res);
        
        if($cnt==0)
        {
            echo "
            <div class='text-center'><h2 class='text center text-successful'>No orders<h2></div>";
        }
        else
        {
            $cnt=1;
            echo "
        <tr>
        <th>Serial No</th>
        <th>Due Amount</th>
        <th>Invoice Number</th>
        <th>Total Products</th>
        <th>Order Date</th>
        <th>Order Status</th>
        <th>Delete</th>
    </tr>
    <tbody class='bg-secondary text-center text-light'>
        ";
            while($row=mysqli_fetch_assoc($res))
            {
                $oid=$row['order_id'];
                $amt=$row['amount'];
                $inv=$row['invoice_number'];
                $tot=$row['total_products'];
                $date=$row['order_date'];
                $status=$row['order_status'];
                echo "
                <tr>
                <td>$cnt</td>
                <td>$amt</td>
                <td>$inv</td>
                <td>$tot</td>
                <td>$date</td>
                <td>$status</td>
                <td><a href='index.php?del_order=$oid' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
            </tr>
            
                ";
                $cnt++;


            }
        }
        ?>
        
            
        </tbody>
    </thead>
</table>