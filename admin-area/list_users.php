<style>
    .user_img 
    {
        width:70px;
        height:70px;
        object-fit:contain;
    }
</style>
<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered m-5">
    <thead class="bg-info text-center">
        <?php
        $get_o="select * from user_table";
        $res=mysqli_query($con,$get_o);
        $cnt=mysqli_num_rows($res);
        
        if($cnt==0)
        {
            echo "
            <div class='text-center'><h2 class='text center text-successful'>No Users<h2></div>";
        }
        else
        {
            $cnt=1;
            echo "
        <tr>
        <th>Serial No</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Image</th>
        <th>User Address</th>
        <th>User Mobile</th>
        <th>Delete</th>
    </tr>
    <tbody class='bg-secondary text-center text-light'>
        ";
            while($row=mysqli_fetch_assoc($res))
            {
                $uid=$row['user_id'];
                $name=$row['username'];
                $email=$row['user_email'];
                $im=$row['user_image'];
                //$tmp=$row['user_image']['tmp_name'];
                $addr=$row['user_address'];
                $mobile=$row['user_mobile'];
                echo "
                <tr>
                <td>$cnt</td>
                <td>$name</td>
                <td>$email</td>
                <td><img src='../users-area/user-images/$im' class='user_img' alt='$name'></td>
                <td>$addr</td>
                <td>$mobile</td>
                <td><a href='index.php?del_user=$uid' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
            </tr>
            
                ";
                $cnt++;


            }
        }
        ?>
        
            
        </tbody>
    </thead>
</table>