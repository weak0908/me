<?php 

  require_once 'db.php';

  function dispaly_data(){
    global $con;
    $query = "select * from details";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>