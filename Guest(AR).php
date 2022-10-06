<?php      Session_start();         ?>
<!DOCTYPE html>
<html>
    <header>
        <title>مرحبا بك ضيف</title>
        <link rel="stylesheet" href="StyleSheet.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </header>
    <body>
        <div class="ex3">
           <?php 
           if($_SESSION == null){
             include('Navigation(AR).php'); 
            }else{
              include('Navlog(AR).php');
            }  ?>
        </div>
        <div>
            <?php

                if($_SESSION != null){
                    $x = $_SESSION['Name'];
                    echo"<p style='color:red;text-align:center;font-size:40px'>مرحبا $x</p>"; 
                }


             ?>
            </div>
        <div class="ex4" id="Gallery">
            <img src="processed-food700-350-e6d0f0f.jpg" height="450px" width="500px">
        </div>
        <div class="ex5">
            <h1>...أهلا بك في موقعنا<br>!مبيعات جديدة متاحة تحقق منها </h1>
            <h2 style="float:right;">:صور لاماكن مشتركة معنا</h2>
            <table>
                <tr>
                    <th ><img src="download.jpg" height="200px" width="300px" id="img4"></th>
                    <th ><img src="109_511317320.jpg" height="200px" width="300px" id="img5"></th>
                </tr>
            </table>
           
        </div>
    <script src="myScript1.js"></script>
    </body>
    <?php include('footer(AR).php');?>
</html>