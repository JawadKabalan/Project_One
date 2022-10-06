<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Page </title>
</head>
<body>
  
<div class="ex3"><?php  include('Nav2(AR).php');  ?> </div>
<?php
if(isset($_POST['ADD'])){
        $x = rand(0,100);
        $query = "INSERT into employee Values('$x','{$_POST['fname']}','{$_POST['Lname']}','{$_POST['position']}','{$_POST['user1']}','{$_POST['pass1']}','{$_POST['gender']}','{$_POST['WorkingTime']}','{$_POST['Pnumber']}')";
        if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
               die( "Could not connect to database. </body></html>" );
        }
        
        if( !mysqli_select_db( $database, "market" ) ){
        
        die( "Could not open books database. </body></html>" );
        }
        if ( !( $result = mysqli_query( $database, $query ) ) ) {
        
        echo "<p>Could not execute query!</p>";
        die( mysqli_error($database) . "</body></html>" );
        
        }
        mysqli_close( $database );
    }





?>
<div class="ex9">
<form action="AddEmp(AR).php" method="POST">
<table>
        <tr>
       <td> البريد الاكتروني:</td>
       <td><input type="text" name="user1"/></td>
       </tr>
        <tr>
        <td>كلمة السر:</td><td><input type="password" name="pass1" id="pass1"></td>
</tr>
<tr>
        <td>الاسم الاول:</td><td><input type="text" name="fname"></td>
</tr>
<tr>
        <td>اسم الشهرة:</td><td><input type="text" name="Lname"></td>
</tr>
<tr>
        <td>الموقع:</td><td><input type="text" name="position"></td>
</tr>
<tr>
       <td> الجنس:</td><td> <Select name="gender"><option>Male</option><option>Female</option></Select></td>
</tr>
<tr>
        <td>رقم الهاتف:</td><td><input type="text" name="Pnumber"></td>
</tr>
<tr>
        <td>ساعات العمل:</td><td><input type="text" name="WorkingTime"></td>
       
</tr>

       

 </table> <input type="Submit" name="ADD" Value="اضافة">
</form>
</div>
 <script src="myScript1.js"></script>         
</body>
<?php include('footer.php');?>
</html>