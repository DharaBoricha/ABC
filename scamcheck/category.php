<select class="form-control" name="category" id="category">
    <option value="">Select a category</option>
    <?php
    include("../scamcheck/db.php");
    $query="select * from category";
    $result=$conn->query($query);
    foreach($result as $row){
          $id=$row['id'];
          $title=$row['title'];
         // echo "<option value=$id>$title</option>";
         echo "<option value=\"$id\">$title</option>";

    }
    ?>






</select>