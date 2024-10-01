<?php
    include ('../config.php');
   if(isset($_GET['deleteid'])){

        $bookid=$_GET['deleteid'];
        
        $sql="DELETE FROM seatbooks WHERE bookingId=$bookid;";
        
        $result=mysqli_query($conn,$sql);
        
 
   }
   

   if($result){
        echo"deleted ";
        header("location: ./booking_details.php?Deleted_Sucessfully");
    exit;
   }
   else
   {
    echo "Failed to delete";
    
   }



   mysqli_close($conn);
?>
