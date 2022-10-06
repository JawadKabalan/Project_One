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
        <?php     
        
        if(isset($_POST['ADD'])){
            $x = rand(0,100);
            $query = "INSERT into items Values('$x','{$_POST['Iname']}','{$_POST['Price']}','{$_POST['bio']}','{$_POST['Quantity']}','{$_POST['filename']}')";
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
        <div class="ex3">
        <?php include('Nav2(AR).php');  ?> 
        </div>
        <div class="ex11">
            <table>
                <tr>
                    <td><a href="Items(AR).php">اضافت منتجات</a></td>
                    <td><a href="EditItems(AR).php">تعديل/الغاء</a></td>
                </tr>
                
            </table>
        </div>
    <div class="ex12">
        <form action="Items.php" method="POST">
                <table>
                <tr>
                <td>اسم المنتج:</td>
                <td><input type="text" name="Iname"></td>
                </tr>
                <tr>
                <td>السعر:</td>
                <td><input type="text" name="Price"></td>
                </tr>
                <tr>
                <td>معلومات:</td>
                <td> <input type="text" name="bio"></td>
                </tr>
                <tr>
                <td>الكمية:</td>
                <td><input type="text" name="Quantity"></td> 
                </tr>
                <tr>
                    <td><input type="file" id="myFile" name="filename"></td>
                </tr>
                <td><input type="Submit" name="ADD" Value="اضافة"></td>
            </table>
        </form>
    </div>
    <script src="myScript1.js"></script>    
    </body>
    <?php include('footer(AR).php');?>
</html>