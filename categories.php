<?php 

  include 'connection.php';
  $sql = "SELECT * FROM xisaabta";
  $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/categ.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container d-flex justify-content-between">
          <a class="navbar-brand text-primary" href="#">
            <h3>Qaamuuska Xisaabta</h3>
        </a>
        <div class="link pl-3 d-flex">
          <a href="#" class="nav-link mr-3">Home</a>
          <a href="#" class="nav-link mr-3">Categories</a>
          <a href="#" class="nav-link">About</a>
        </div>
        </div>
      </nav>
      
      <div class="container cat">
      <?php 
          $sql = "SELECT * FROM xisaabta";
          $result = mysqli_query($conn, $sql);
        ?>

        <!-- categories -->
        <div class="category">
          <h1 class="text-center">A</h1>
        <?php 
            while($row = mysqli_fetch_assoc($result)){
              if($row['sumad']=='a'){
            ?>

          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
              <p><?php echo $row['eray']?></p>
              <p class="text-left" style=""><?php echo $row['micne']?></p>
            </li>
          </ul>
           <?php }}?>
        </div>
      
        <!-- categories -->
        <div class="category">
          <h1 class="text-center">C</h1>
        <?php 
        $sql = "SELECT * FROM xisaabta";
        $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
              if($row['sumad']=='c'){
            ?>

          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
              <p><?php echo $row['eray']?></p>
              <p class="text-left" style="float:left; position: absolute; margin-left: 50%"><?php echo $row['micne']?></p>
            </li>
          </ul>
           <?php }}?>
        </div>
      </div></div>
      
</body>
</html>