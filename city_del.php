<?php
include 'conn.php';

$id = $_GET['id'];

$query = "delete from `city` where city_id='$id'";
$check = mysqli_query($conn,$query);

if($check){
    ?>
            <script>
              alert("delete success");  
              </script>
    <?php
    header('location:city.php');
        }
        else{
           ?>
            <script>
              alert("delete failed");  
              </script>
        <?php
        }
    

?>