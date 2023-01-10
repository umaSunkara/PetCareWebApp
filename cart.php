<!DOCTYPE html>
<html lang="en">
    <?php
    include('includes/connect.php');
    include('functions/commonfunc.php');
    session_start();
    ?>
<head>
    <style>
        .cartimg
{
    width:80px;
    height:80px;
    object-fit:contain;
}
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- css link-->
<link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="container-fluid p-0">
        <!--1st Child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <img class="logo" src="./images/petc.png" alt="Logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="disp_all.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./users-area/user_registration.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>
          <?php
        cart_item();
        ?>
        </sup></a>        
      </li>
      
    </ul>
    
  </div>
</nav>
<!--2nd child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    
      <?php
      if(!isset($_SESSION['username']))
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='#'>Welcome Guest</a>
      </li>";
      }
      else
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
      </li>";
      }
      if(!isset($_SESSION['username']))
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='./users-area/user_login.php'>Login
        </a>
      </li>";
      }
      else
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='./users-area/logout.php'>Log Out
        </a>
      </li>";
      }
      ?>
</ul>


</nav>
<?php 
cart();
?>
<!--3rd child--> 
<div class="bg-light">
    <h3 class="text-center">Pet Care</h3>
    <p class="text-center">Live and Let others Live</p>
</div>
<!--4th child-->
<div class="container">
    <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
            
            <tbody>
                <!--Dynamic Data-->
                <?php
                global $con;
                $ip=getIPAddress();
                $total=0;
                $cart_q="select * from cart_details where ip_address='$ip'";
                $res=mysqli_query($con,$cart_q);
                $num=mysqli_num_rows($res);
                if($num>0){
                    echo "<thead>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Remove</th>
                <th colspan=2>Operations</th>
            </thead>";
                while($row=mysqli_fetch_array($res))
                {
                    $id=$row['product_id'];
                    $select_p="select * from products where product_id=$id";
                    $res_p=mysqli_query($con,$select_p);
                    while($row_p=mysqli_fetch_array($res_p))
                    {
                        $price=array($row_p['product_price']);
                        $price_t=$row_p['product_price'];
                        $title=$row_p['product_title'];
                        $image=$row_p['product_image1'];
                        
                        $prod_val=array_sum($price);
                        $total+=$prod_val;
                   
                ?>
                <tr> 
                    <td><?php echo $title ?></td>
                    <td><img src="./images/<?php echo $image ?>" class="cartimg"></td>
                    <td><input type="text" name="qty"class=""></td>
                    <td><?php echo $price_t ?></td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $id ?>"></td>
                    <td>
                    <input type="submit" value="Update Cart" class="bg-info  border-0" name="update_cart">
                    <?php
                    global $con;
                    $ip=getIPAddress();
                    if(isset($_POST['update_cart']))
                    {
                        $quantity=$_POST['qty'];
          $upd_q="update cart_details set quantity=$quantity where ip_address='$ip'";
          $res_pr=mysqli_query($con,$upd_q);
                        $total=$total*$quantity;
                    }
                    ?>
                    <input type="submit" value="Remove Cart" class="bg-info  border-0" name="remove_cart">
                        
                    </td>
                </tr>  
                
                <?php  }
       
    } 
     
}
    else{
        echo "<h2 class='text-center text-danger'>Cart is Empty</h2>";
        
    }?>  
            </tbody>


        </table>
        <div class="d-flex">
            <h4 class="px-3">Subtotal:<strong><?php echo $total ?></strong></h4>
            <a href="index.php">
                <button class="bg-info px-3 border-0 mx-3">Continue Shopping</button></a>
                
            <button class="bg-secondary px-3 border-0"><a class="bg-secondary px-3 border-0" href="./users-area/checkout.php">Check Out</a></button>
        </div>
</form>
<?php
function removecart()
{
    global $con;
    if(isset($_POST['remove_cart']))
    {
        foreach($_POST['removeitem'] as $remove_id)
        {
            echo $remove_id;
            $del_q="delete from cart_details where product_id=$remove_id";
            $run_del=mysqli_query($con,$del_q);
            if($run_del)
            {
                echo "<script>window.open('cart.php','_self')</script>";
            }
        }
    }
}
echo $remove_item=removecart();

?>
    </div>
</div>

    <!--lst child-->
    <?php
    include('./includes/footer.php');
    ?>
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</body>
</html>