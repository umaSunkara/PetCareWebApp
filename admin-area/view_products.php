
<h1 class="text-center text-success">View Products</h1>
<style>
    .pimg 
    {
        width:100px;
        height:100px;
        object-fit:contain;
    }
    body 
    {
        overflow-x:hidden;
    }
</style>
<table class="table table-bordered">
    <thead class="bg-info">
        <tr>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total Sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $get_prods="select * from products";
        $res=mysqli_query($con,$get_prods);
        $n=1;
        while($row=mysqli_fetch_array($res))
        {
            $pid=$row['product_id'];
            $title=$row['product_title'];
            $im1=$row['product_image1'];
            $price=$row['product_price'];
            $status=$row['status'];
            ?>
        
            <tr class='text-center'>
            <td><?php echo $pid ?></td>
            <td><?php echo $title ?></td>
            <td><img src='./productimages/<?php echo $im1; ?>' class='pimg'></td>
            <td><?php echo $price; ?></td>
            
            <td>
                <?php
                $get_c="select * from orders_pending where product_id=$pid";
                $res_c=mysqli_query($con,$get_c);
                $row_c=mysqli_num_rows($res_c);
                echo $row_c;
                ?>
            </td>
            <td><?php echo $status; ?></td>
            <td><a href='index.php?edit_products=<?php echo $pid;?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='index.php?delete_products=<?php echo $pid;?>' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
            
            <?php
        }
        ?>
        

    </tbody>
</table>

