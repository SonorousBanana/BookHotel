<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
      <th class="text-center">S.N.</th>
        <th>reservation Start</th>
        <th>reservation End</th>
        <th>reservation Name</th>
        <th>reservation Email</th>
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from reservations";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$count?></td>
          <td><?=$row["reservation_start"]?></td>
          <td><?=$row["reservation_end"]?></td>
          <td><?=$row["reservation_name"]?></td>
          <td><?=$row["reservation_email"]?></td>
          <td><button class="btn btn-danger" style="height:40px" onclick="orderDelete('<?=$row['reservation_id']?>')">Delete</button></td>
          <?php
            $count=$count+1;
          }
        }
      ?>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>