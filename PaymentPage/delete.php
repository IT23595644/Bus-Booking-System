<?php
include 'connect.php'; 
if(isset($_GET['deleteid'])){
    $ID=$_GET['deleteid'];

    $sql="delete from card_details where Card_ID=$ID";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:cards.php');
    }
}
?>
