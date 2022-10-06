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
        <?php include('Navigation(AR).php');  ?> 
        </div>
        <?php
if(isset($_POST['Send'])){
    $X = rand(0,1000);
    $query1 = "SELECT ID from employee";
    if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
        die( "Could not connect to database. </body></html>" );
    }
 
    if( !mysqli_select_db( $database, "market" ) ){
 
       die( "Could not open books database. </body></html>" );
     }
     if ( !( $result1 = mysqli_query( $database, $query1 ) ) ) {
           echo "<p>Could not execute query!</p>";
     }
    $i = 0;
     while ( $row = mysqli_fetch_row( $result1 ) ) {
        $query2 = "INSERT into messages Values('$X',1,'$row[$i]','{$_POST['message']}','{$_POST['message']}')";
     }
    
    if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
           die( "Could not connect to database. </body></html>" );
    }
    
    if( !mysqli_select_db( $database, "market" ) ){
    
    die( "Could not open books database. </body></html>" );
    }
    if ( !( $result2 = mysqli_query( $database, $query2 ) ) ) {
    
    echo "<p>Could not execute query!</p>";
    die( mysqli_error($database) . "</body></html>" );
    
    }
    mysqli_close( $database );
}


        ?>
        <div>
            <form action="ContactUS(AR).php" method="POST">
                رسالتك:<input type="text" name="message">
                <input type="Submit" name="Send" value="Send">
            </form>
        </div>
        <script src="myScript1.js"></script>
    </body>
    
    <?php include('footer(AR).php');?>
</html>