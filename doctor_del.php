<?php
include 'conn.php';

$id = $_GET['id'];

$query = "delete from `doctor` where doctor_id='$id'";
$check = mysqli_query($conn,$query);

if($check){
    ?>
            <script>
              alert("delete success");  
              </script>
    <?php
    header('location:doctor_show.php');
        }
        else{
           ?>
            <script>
              alert("delete failed");  
              </script>
        <?php
        }
    

?>