<?php
include '../config.php'; 
if(isset($_GET['deleteid'])){
    $ID=$_GET['deleteid'];

    $sql="DELETE FROM paymentdetails where payCardId=$ID";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:paymentDetails.php');
    }
}
?>
