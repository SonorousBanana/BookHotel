
<div >
  <h2>Rooms</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Room Category</th>
        <th class="text-center">Price per room</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from rooms";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["room_type"]?></td>      
      <td><?=$row["room_price"]?></td>  
      <!-- <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['room_id']?>')">Edit</button></td>-->
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['room_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Change a Price
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Change a Price of a Room Type</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  action="./controller/updateItemController.php" enctype='multipart/form-data' method="POST"> <!-- δημιουργησα το 'action="./controller.updateItemController.php"'
           στην form και εσβησα το onsubmit='addItem()' για να μην κανει τη διαδικασια μεσω JS αλλά απευθείας απ το αρχειο php-->
           <div class="form-group">
              <label for="price">Room:</label>
              <input type="text" class="form-control" name="room_type" id="room_type" required>
            </div>
            <div class="form-group">
              <label for="price">Price:</label>
              <input type="number" class="form-control" name="room_price" id="room_price" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="submit" id="submit" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   