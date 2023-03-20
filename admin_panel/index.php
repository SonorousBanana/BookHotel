<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>
</head>
<body >
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Users</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from users";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Rooms</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from rooms";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Reservations</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from reservations";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
        </div>
        
    </div>
     
   
    <?php
    define('DBINFO', 'mysql:host=localhost;dbname=panorama_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    //include_once "../config/dbconnect.php";
    $query = "SELECT * FROM requests";
    $result_users = mysqli_query($conn, "SELECT * FROM users");
    function performQuery($query){
      $con = new PDO(DBINFO,DBUSER,DBPASS);
      $stmt = $con->prepare($query);
      if($stmt->execute()){
        return true;
      }else{
        return false;
      }
    }
    
    function fetchAll($query)
    {
      $con = new PDO(DBINFO, DBUSER, DBPASS);
      $stmt = $con->query($query);
      return $stmt->fetchAll();
    }
    ?>
  <?php

$query = "SELECT * FROM requests";
if (count(fetchAll($query)) > 0) {
  foreach (fetchAll($query) as $row) {
?>
<div class="pending">
    <div class="jumbotron-heading">
      <p>Name:<b><?php echo $row['firstname'] ?></b></p>
    </div>
    <h3 class="jumbotron-heading">Email: <?php echo $row['email'] ?></h3>
    <p class="lead text-muted"><?php //echo $row['message'] 
                                ?></p>
    <p>
      <a href="http://localhost/panorama_hotel/admin_panel/adminView/accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
      <a href="http://localhost/panorama_hotel/admin_panel/adminView/reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
    </p>
    <small><i><?php echo $row['date'] ?></i></small>
    </div> 
<?php
  }
} else {
  echo "<div class='eg_pending_msg'>No Pending Requests.</div>";
}
?>

<?php
    $query = "SELECT * FROM requests";
    $result_users = mysqli_query($conn, "SELECT * FROM users");

    ?>  
        <?php
           /* if (isset($_GET['room']) && $_GET['room'] == "success") {
                echo '<script> alert("Categcategoory Successfully Added")</script>';
            }else if (isset($_GET['room']) && $_GET['room'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['size']) && $_GET['size'] == "success") {
                echo '<script> alert("Size Successfully Added")</script>';
            }else if (isset($_GET['size']) && $_GET['size'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['variation']) && $_GET['variation'] == "success") {
                echo '<script> alert("Variation Successfully Added")</script>';
            }else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }*/
        ?>


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 <style>
.pending{

    text-align: center;
}

.eg_pending_msg{

    text-align: center;
}
 </style>
</html>