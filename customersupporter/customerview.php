<?php
    include_once("../config.php");
    include("../Headers-Footers/header.php");
?>

    <link rel="stylesheet" href="../customersupporter/crud.css"> 
    
    <style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
   
}

.card-box {
    background-color: #ffffff;
    width: 80%;
    max-width: 1000px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin: 20px 0;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
}

th {
    background-color: #f4f4f4;
}

table tr:first-child th:first-child {
    border-top-left-radius: 10px;
}

table tr:first-child th:last-child {
    border-top-right-radius: 10px;
}

table tr:last-child td:first-child {
    border-bottom-left-radius: 10px;
}

table tr:last-child td:last-child {
    border-bottom-right-radius: 10px;
}
td{
    background-color:#f4f4f4 ;
}

.exp-month {
    width: 50px;
}

.update-btn {
    background-color: green;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.delete-btn {
    background-color: red;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.update-btn a, .delete-btn a {
    color: white;
    text-decoration: none;
}

.update-btn:hover, .delete-btn:hover {
    opacity: 0.8;
}

.add-new-card-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
}

.add-new-card-btn:hover {
    background-color: #0056b3;
}

.payment-details {
    display: flex;
    justify-content: center;
}

.button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
    </style>
    <div class="title">
        <h1>Manage Customer Supporters</h1>
    </div>
    

    <div class="box">      
        
            <button type="button" class="button">Add Supporter</button><br>
            
            <table>
            <tr>
              <th>First Name<th>Last Name</th><th>Address</th><th>Phone Number</th><th>DOB</th><th colspan="2">Operation</th>
            </tr>
            <?php
               $sql="SELECT * FROM customersupporter;";
               
               $result=mysqli_query($conn,$sql);

               if(mysqli_num_rows($result)>0)
               {    
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>". $row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['address']."</td><td>".$row['pNum']."</td><td>".$row['dob']."</td><td><button class='update-btn'><a href='#'>UPDATE</a></button></td><td><button class='delete-btn'><a href='delete.php?deleteid='>DELETE</a></button></td></tr>";
                    }
               }
               ?>
             </table>
            

    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>