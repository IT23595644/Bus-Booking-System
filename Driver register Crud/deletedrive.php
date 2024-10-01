<?php
    include ('../config.php');
   if(isset($_GET['deleteid'])){

        $dID=$_GET['deleteid'];
        
        $sql="DELETE FROM busdriver WHERE driverId=$dID;";
        
        $result=mysqli_query($conn,$sql);
        
 
   }
   

   if($result){
        echo"deleted ";
        header("location: adddrive.php?Deleted_Sucessfully");
    exit;
   }
   else
   {
    echo "Failed to delete";
    
   }



   mysqli_close($conn);
?>
