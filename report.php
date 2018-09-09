<!DOCTYPE html>
<html lang="th">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <style>*
     {} 
    thead{
      BACKGROUND:#1E90FF;
    }
    tbody{
      background:#FFE4E1;
    
    }
   
  
  
  </style>
</head>
<body>
    <table class="table table-bordered" border="4" bordercolor="black">
    <thead>
      <tr>
        <th>UserID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Age</th>
        <th>Address</th>
        <th>Zipcode</th>
        <th>Gender</th>
        <th>Tel.</th>
        <th>BloodType</th>
        <th>Congenital disease</th>
        
      </tr>
    </thead>
        <tbody>
            <?php
                    include("conn/mysqlconn.php");
                
                $sql = "SELECT * FROM userprofile";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    //output data of each row
                $count = 1;
                    while($row = mysqli_fetch_assoc($result))
                    {

            ?>
                    
                    <tr>
                        <td><?php echo $count; ++$count?></td>
                        <td><?php echo $row["fname"] ;?></td>
                        <td><?php echo $row["lname"] ; ?></td>
                        <td><?php echo $row["email"] ;?></td>
                        <td><?php echo $row["age"] ;?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["zipcode"] ;?></td>
                        <td><?php echo $row["gender"] ;?></td>
                        <td><?php echo $row["phone"] ;?></td>
                        <td><?php echo $row["blood_type"] ;?></td>
                        <td><?php echo $row["Con_dis"] ;?></td>
                    </tr>
                <?php 
                    }
                }
                else{
                    echo"0 result";
                }
                ?>
        </tbody> 
    </table>
   
</body>