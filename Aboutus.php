<?php  Session_start();   ?>
<!DOCTYPE html>
<html>
    <header>
        <title>About US</title>
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
        <script src="myScript1.js"></script>
        <div class="ex7">
            <p >We are a page that combines a lot of stores togeather to make it easy for you to reach and order what you want while sitting at home
               The group consists of 2 guys which are developers worked on this project to simplify our life and make it much easier. The idea is extracted
               from  a mall project as if you are in a mall and switching between stores you can just do this while sitting and scrolling between stores as
               clothes stores,food stores,caffe shops, furniture stores and etc... and store can register his company name with some info and pay a monthly
               fee to stay on this website and show his stuff. The store manager can easly change and add things with our tools without a need to have a
               programmer and update the code each time he needs to change a thing just some clicks and he can do what ever he want to do. This also
               makes the manager work move easly by less employees and easy managing.
            </p>
        </div>
        <div class="ex8">
            <p><img src="phone-call-icon.png" height="30px"  width="40px"><b>+961 81737677<br>+961 70004893</b></p>
            <p><img src="facebook-icon-preview-1.png" height="30px" width="40px">Marketing Projects</p>
        </div>

        <script src="myScript1.js"></script>        
</body>
<?php include('footer.php');?>

</html>