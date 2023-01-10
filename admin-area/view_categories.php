
<h3 class="text-center text-success">
    All Categories
</h3>
<table class="table table-bordered">
    <thead class="bg-info mt-5">
        <tr>
            <th>Serial No</th>
            <th>Category Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $select="select * from categories";
        $exec_c=mysqli_query($con,$select);
        $s=0;
        while($row=mysqli_fetch_array($exec_c))
        {
            $id=$row['category_id'];
            $title=$row['category_title'];
            $s++;
       
        ?>
        <tr class="text-center">
            <td><?php echo $s ?></td>
            <td><?php echo $title ?></td>
        <td><a href='index.php?edit_category=<?php echo $id?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
    <td><a href='index.php?delete_category=<?php echo $id?>' class="text-light" data-toggle="modal" data-target="#exampleModal"><i class='fa-solid fa-trash'></i></a></td>
        </tr>
        <?php
         }
         ?>

    
    </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4>Are You sure you want to delete this?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?view_categories" class="text-light text-decoration-none"target="_self">No</a></button>
        <button type="button" class="btn btn-primary"><a href="./index.php?delete_category=<?php echo $id?>" class="text-light text-decoration-none"target="_self">Yes</a></button>
      </div>
    </div>
  </div>
</div>
<?php


?>