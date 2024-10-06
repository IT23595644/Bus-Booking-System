<?php
    include('../config.php');
    include ('header.php');



?>
<style>
    body{
        background:url('back1.jpg');
        background-size: cover;
        background-position:center;
    }
    .bkgig{
        height:auto;
    }
    .bkgig h1{
        margin-bottom:20px;
    }
    table {
    margin:auto;
    width: 50%;
    border-collapse: collapse;
    background-color: #fff;
    
    }

    th, td {
        padding: 15px;
        text-align: center;
        border: 1px solid #ddd;
        font-size: 16px;
    }

    th {
        background-color: #333;
        color: white;
        text-transform: uppercase;
    }

    td {
        color: #333;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #ddd;
    }
    footer{
        position:fixed;
        bottom:0;
        
    }
</style>
<div class="bkgig">
    <h1><center>Messages</center></h1>
    <table border=1>
        <tr>
            <th>Message ID</th><th>Messager Name</th><th>email</th><th>Message</th>
        </tr>
        <?php
            $sql="SELECT * FROM questions";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result)){
                    
                    $msgId=$row['id'];
                    $mname=$row['name'];
                    $memail=$row['email'];
                    $msg=$row['msg'];
                    echo "<tr><td>$msgId</td><td>$mname</td><td>$memail</td><td>$msg</td></tr>";
                }
                

            }
        ?>

    </table>
    
</div>


<?php
    include ('../Headers-Footers/footer.php');


?>