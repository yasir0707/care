<?php
include 'conn.php';

$id = $_GET['id'];

$query = "delete from `depart` where depart_id='$id'";
$check = mysqli_query($conn,$query);

if($check){
    ?>
            <script>
              alert("delete success");  
              </script>
    <?php
    header('location:depart.php');
        }
        else{
           ?>
            <script>
              alert("delete failed");  
              </script>
        <?php
        }
    

?>