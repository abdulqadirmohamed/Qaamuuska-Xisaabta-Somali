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
    <title>Qaamuuska Xisaabta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">  


</head>
<body>
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
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
  
 
  <div class="container">
    <div class="title text-center text-white mt-5">
      <h1>Qaamuuska Eray Bixinta Xisaabta</h1>

    </div>
      <form action="" class="form-group my-5 text-center d-flex align-items-center">
      <i class="fa fa-search"></i>
      <input type="text"  id="search" placeholder="Type here to Search" >
      </form>
  </div>
  <?php 
   $sql = "SELECT * FROM xisaabta";
   $result = mysqli_query($conn, $sql);
  ?>
  <div class="container">
    <table class="" style="width:50%; margin:auto">
      <thead class='bg-dark text-white'>
        <tr>
          <!-- <th>Erray</th>
          <th>Micno</th> -->
        </tr>
      </thead>
      <tbody  id="output">
        <?php 
         //while($row = mysqli_fetch_assoc($result)){
           
        ?>
        <tr>
          <td><?php// echo $row['eray']?></td>
          <td><?php //echo $row['micne']?></td>
        </tr>
        <?php// }?>
      </tbody>
    </table>
  </div>

  
  <script type="text/javascript">
      // searching
          $(document).ready(function(){
          $("#search").keypress(function(){
            $.ajax({
              type:'POST',
              url:'search.php',
              data:{
                name:$("#search").val(),
              },
              success:function(data){
                $("#output").html(data);
              }
            });
          });
          });


        

      </script>
  
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>