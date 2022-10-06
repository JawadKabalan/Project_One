<?php   Session_start();    ?>
<!DOCTYPE html>
<html>
    <header>
        <title>Welcome Guest</title>
        <link rel="stylesheet" href="StyleSheet.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </header>
    <body>
        <div class="ex3">
           <?php 
            if($_SESSION == null){
                include('Navigation.php'); 
                }else{
                    include('Navlog.php');
                }
           ?>
        </div>
        <div>
            <?php

                if($_SESSION != null){
                    $x = $_SESSION['Name'];
                    echo"<p style='color:red;text-align:center;font-size:40px'>Welcome $x</p>"; 
                }


             ?>
            </div>
        <div class="ex4" id="Gallery">
            <img src="d7920e73-14b1-4d87-80c3-ac22cc9a3204.jpg" height="500px" width="400px">
        </div>
        <div class="ex5">
            <h1>Welcome to our site..<br> New Sales available check them out!</h1>
            <h2>Pictures of the places we have:</h2>
            <table>
                <tr>
                    <th ><img src="download.jpg" height="200px" width="300px" id="img4"></th>
                    <th ><img src="109_511317320.jpg" height="200px" width="300px" id="img5"></th>
                </tr>
            </table>
           
        </div>
    <script src="myScript1.js"></script>
    </body>
    <?php include('footer.php');?>
</html>