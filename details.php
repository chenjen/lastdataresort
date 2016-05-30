<?php
require_once 'connection.php';
require_once 'models/reserve-model.php';
$m = $_GET['roomID'];
$conn = getConnection();
$resortModel = new resort($conn);
$showDetails = $resortModel->showDetails($m);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title><?=htmlentities($match['ResortName'])?></title>
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body class="container">
    <?php   
    include 'views/book.php';
 ?>

    
  <!-- GitHub Repo-->
  <br><footer><a href="https://github.com/INFO344-win-2016/challenges-chenjen">GitHub Repo</a></footer><br>
</body>
</html>