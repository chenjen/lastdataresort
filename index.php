<?php
//establish connection with database 
//require_once 'connection.php';
//require_once 'models/reserve-model.php';
//$q = $_GET['q']; //save search term
//$conn = getConnection();
//$resortModel = new resort($conn);
//$matches = $resortModel->search($q);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>Last Data Resort</title>
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body class="container">
    <?php 
     
    include 'views/search-form.php';
     if (count($matches) == 0) { //display message if search did not match any results
     ?><p style="color:red;">Your search did not match any results. Please try again with a different search.</p> <?php    
     } 
    include 'views/matches.php'; //show rooms when searched 
     
    ?>
 <!-- GitHub Repo-->
 <br><footer><a href="https://github.com/INFO344-win-2016/challenges-chenjen">GitHub Repo</a></footer><br>
</body>
</html>