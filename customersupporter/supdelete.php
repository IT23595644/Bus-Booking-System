<?php                                          //deleting  a row
    include ('../config.php');
   if(isset($_GET['deleteid'])){

        $supid=$_GET['deleteid'];
        
        $sql="DELETE FROM customersupporter WHERE supId=$supid;";
        
        $result=mysqli_query($conn,$sql);
        
 
   }
   

   if($result){                              //redirecting to the view page
        header("location: ./customerview.php?Deleted_Sucessfully");
        exit;
   }
   else
   {
    echo "Failed to delete";
   }
   mysqli_close($conn);
?>
