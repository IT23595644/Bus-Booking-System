<?php
    include ('../config.php');
   if(isset($_GET['deleteid'])){

        $supid=$_GET['deleteid'];
        
        $sql="DELETE FROM customersupporter WHERE supId=$supid;";
        
        $result=mysqli_query($conn,$sql);
        
 
   }
   

   if($result){
        echo"deleted ";
        header("location: ./customerview.php?Deleted_Sucessfully");
    exit;
   }
   else
   {
    echo "Failed to delete";
    
   }



   mysqli_close($conn);
?>
