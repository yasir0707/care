
<?php
include 'conn.php';

$id = $_GET["id"];

$query = "DELETE from `appoint` where `appoint_id`= '$id' ";
$check = mysqli_query($conn,$query);

if($check){
    ?>
            <script>
              alert("Appoint Cancel");  
              </script>
    <?php
    header('location:home.php');
        }
        else{
           ?>
            <script>
              alert("Appoint Cancel failed");  
              </script>
        <?php
        }
    

?>