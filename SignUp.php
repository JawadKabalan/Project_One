<?php Session_start(); ?>
<!DOCTYPE html>
<html>
    <header>
        <title>Products</title>
        <link rel="stylesheet" href="StyleSheet.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </header>
    <body>
        <div class="ex3">
        <?php include('Navigation.php');  ?> 
        </div>
        <?php    

        if(isset($_POST['Signup'])){
            if($_POST['user1'] != $_POST['user2']){
                die( "<script>alert('your email doesnot match please try again');</script>");
            }
            if($_POST['pass1'] != $_POST['pass2']){
                die( "<script>alert('your password doesnot match please try again');</script>");
            }
            $x = rand(0,100);
            $query = "INSERT into accounts Values('$x','{$_POST['user1']}','{$_POST['pass1']}','{$_POST['fname']}','{$_POST['Lname']}','{$_POST['gender']}','{$_POST['birth']}','{$_POST['country']}','{$_POST['Pnumber']}','{$_POST['address']}')";
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
       <form action="SignUp.php" method="POST"> 
        <table>
        <tr>
       <td> Email:</td>
       <td><input type="text" name="user1"/></td>
       </tr>
       <tr>
      <td>confirm-Email:</td>
      <td><input type="text" name="user2"/></td><br>
        </tr>
        <tr>
        <td>password:</td><td><input type="password" name="pass1" id="pass1"></td>
</tr>
<tr>
        <td>confirm-password:</td><td><input type="password" name="pass2" id="pass2"></td><td><p id="show"></p></td>
<script >
let a10 = document.getElementById("pass1");
let a11 = document.getElementById("pass2");
let a12 = document.getElementById("show");
let a13 = setInterval(compare,500);
function compare(){
    if(a10.textContent.toString() == a11.textContent.toString()){
      a12.innerHTML = "";
    }else{
      a12.innerHTML = "Password don't match";
    }
}

</script>
    </tr> 
<tr>
        <td>First Name:</td><td><input type="text" name="fname"></td>
</tr>
<tr>
        <td>Last Name:</td><td><input type="text" name="Lname"></td>
</tr>
<tr>
       <td> Gender:</td><td> <Select name="gender"><option>Male</option><option>Female</option></Select></td>
</tr>
<tr>
    <td>Birthdate</td><td><input type="date" name="birth"></td>
    </tr>
<tr>
        <td>country:</td><td><input type="text" name="country"></td>
</tr>
<tr>
        <td>phonenumber:</td><td><input type="text" name="Pnumber"></td>
</tr>
<tr>
        <td>address:</td><td><input type="text" name="address"></td>
</tr>

       </table>
<input type="Submit" name="Signup" Value="SIGNUP">       
       </form>
        </div>
        <script src="myScript1.js"></script>        
    </body>
    <?php include('footer.php');?>
    
</html>