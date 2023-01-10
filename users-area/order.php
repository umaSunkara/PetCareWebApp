<?php
include('../includes/connect.php');
include('../functions/commonfunc.php');
if(isset($_GET['user_id']))
{
    $u_id=$_GET['user_id'];
    echo $u_id;
}

$ip=getIPAddress();
$total_p=0;
$cart_q="select * from cart_details where ip_address='$ip'";
$result=mysqli_query($con,$cart_q);
$num=mysqli_num_rows($result);
$invoice=mt_rand();

$status='pending';
while($row_p=mysqli_fetch_array($result))
{
    $pid=$row_p['product_id'];
    $select_p="select * from products where product_id='$pid'";
    $res=mysqli_query($con,$select_p);
    while($row_price=mysqli_fetch_array($res))
    {
        $price=array($row_price['product_price']);
        $item_price=array_sum($price);
        $total_p+=$item_price;

    }

}
//getting quantity from cart
$get_q="select * from cart_details";
$run_q=mysqli_query($con,$get_q);
$get_item_q=mysqli_fetch_array($run_q);
$quantity=$get_item_q['quantity'];
if($quantity==0)
{
    $quantity=1;
    $subtotal=$total_p;
}
else{
    $quantity=$quantity;
    $subtotal=$total_p*$quantity;

}
 $insert_q="insert into user_orders (user_id,amount,invoice_number,total_products,order_date,order_status) values($u_id,$subtotal,$invoice,$num,NOW(),'$status')";
    $res_qu=mysqli_query($con,$insert_q);
    if($res_qu)
{
    echo "<script>alert('Orders are submitted sucessfully')</script>";
    echo "<script>window.open('profile.php','_self')</script>";
}




//orders pending
$insert_pending_orders="insert into orders_pending (user_id,invoice_number,product_id,quantity,order_status) values($u_id,$invoice,$pid,$quantity,'$status')";
$result_pending=mysqli_query($con,$insert_pending_orders);

//delete items from cart
$empty_cart="delete from cart_details where ip_address='$ip'";
$exec_d=mysqli_query($con,$empty_cart);
?>