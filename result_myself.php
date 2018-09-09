<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">

        <title>Run แบบ พี่ ตูน กัน เถอะ</title>
       
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background : url(image/PACER-1-1024x684.jpg);
    background-size:100% 300%;
    background-repeat:no-repeat;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 20%;
    height: 800px; /* only for demonstration, should be removed */
    background: #33ffff;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float : left;
    text-align :left;
    padding: 20px;
    width: 80%;
    background-color: #0000;
    height: 800px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #D8BFD8;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run แบบ พี่ ตูน กัน เถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
<article>  
       <?php
       include("conn/mysqlconn.php");
        // define variables and set to empty values
        $fname = $email = $gender = $lname = $age = $address = $blood_type = $Con_dis = " ";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $fname = test_input($_POST["fname"]);
          $lname = test_input($_POST["lname"]);
          $DoB = test_input($_POST["Day"]);
          $MoB = test_input($_POST["month"]);
          $YoB = test_input($_POST["year"]);
          $age = test_input($_POST["age"]);
          $citizen = test_input($_POST["citizen"]);
          $zipcode = test_input($_POST["zipcode"]);
          $phone = test_input($_POST["phone"]);
          $email = test_input($_POST["email"]);
          $bloodtype = test_input($_POST["blood_type"]);
          $shirt = test_input($_POST["shirt"]);
          $address = test_input($_POST["address"]);
          $gender = test_input($_POST["gender"]);
          $con_dis = test_input($_POST["Con_dis"]);
        }
        //echo $bloodtype."<br>";
        //echo $shirt."<br>";

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        echo "<h2>ลงทะเบียนเสร็จสิ้น วิ่งแบบพี่ตูน:</h2>";
        echo "First Name :".$fname."<br>";
        echo "Last Name :".$lname."<br>";
        echo "Gender : ".$gender."<br>";
        echo "Age : ".$age."<br>";
        echo "Address : ".$address."<br>";
        echo "Tel. : ".$phone."<br>";
        echo "E-mail : ".$email."<br>";
        //insert data
        $sql = "INSERT INTO userprofile (fname,lname,Day,month,year,age,citizen,zipcode,phone,email,
        blood_type,shirt,address,gender,Con_dis) 
        VALUES ('$fname','$lname','$DoB','$MoB','$YoB','$age','$citizen','$zipcode','$phone','$email',
        '$bloodtype','$shirt','$address', '$gender','$con_dis')";

        //echo $sql."<br>";

        if (mysqli_query($conn, $sql)) {//คำสั่งที่รัน query ของ mysql
            echo "<br><B>New record created successfully</B><br>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);    
        ?>
        <br>
        
        <image src ="image/ToonRUN_6122017_๑๗๑๒๐๖_0002-1.jpg" style="width:50%;height:50%" align=middle>
        <br><br>
        <form action="report.php">
        <input type ="submit" value="Report">
        </form>
        &nbsp;
        <form action="index.php">
        <input type ="submit" value="back">
        </form>
</article> 
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>