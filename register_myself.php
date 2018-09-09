<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #FF9999;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
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
    width: 70%;
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
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
<article>
  <h2>Running Forms</h2>

    <form method="post" action="result_myself.php">
    <B>First name* </B>:<br><!--ชื่อจริง-->
        <input type="text" name="fname" >
    <br>
    <B>Last name* </B>:<br><!--นามสกุล-->
        <input type="text" name="lname" >
    <br>
    <h2>Gender*</h2><!--เพศ-->
     
        <input type="radio" name="gender" value="male" > Male
        <input type="radio" name="gender" value="female"> Female
   
    <br><br>
    <B>Brith Date(DD/MM/YY)*</B><input type="text" name="Day" size="2"> / <input type="text" name="month" size="2"> / <input type="text" name="year" size="2">
    <B>Age*</B> <input type="text" name="age" size="2">
    <br>
    <B>Citizenship*</B><input type="text" name="citizen">
    <br>
    <B>Blood type*</B><br>
        <input type="radio" name="blood_type" value="A"> A
        <br>
        <input type="radio" name="blood_type" value="B"> B
        <br>    
        <input type="radio" name="blood_type" value="O"> O
        <br>
        <input type="radio" name="blood_type" value="AB"> AB
        <br>
      
    <br>
    <B>Address*</B>
    <br>
    <textarea  name="address" rows="10" cols="30">
    </textarea>
    <br>
    <B>Zip code*</B><input type="text" name="zipcode">
    <br>
    <B>Phone*</B><input type="text" name="phone">
    <br>
    <B>E-mail*</B><input type="text" name="email">
    <br>
    <B>Preferred Shirt Size*</B>
        <input type="radio" name="shirt" value="XS 36"> XS 36"
        <input type="radio" name="shirt" value="S 38"> S 38"
        <input type="radio" name="shirt" value="M 40"> M 40"
        <input type="radio" name="shirt" value="L 34"> L 42"
        <input type="radio" name="shirt" value="XL 44"> XL 44"
        <input type="radio" name="shirt" value="XXL 46"> XXL 46"
       
    <br>
    <B>Congenital disease*(ไม่มีไม่ต้องใส่)</B><input type="text" name="Con_dis">
    <br><br>
    <input type="submit" name="submit"value="Submit">
    </form>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>