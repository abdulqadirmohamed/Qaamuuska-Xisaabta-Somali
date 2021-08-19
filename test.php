<?php 

  include 'connection.php';

// 

// $sql = "SELECT * FROM t_teacher";
$sql = "SELECT * FROM xisaabta";
$result = mysqli_query($conn, $sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>List Teacers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!--  -->


</head>
<style>
.table{
    width: 80%;
    margin: auto;
}
.container h3{
  margin-top:-15px;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="search my-5">
        <div class="container" style="width:70%; margin:auto">
            <input type="text" class="form-control" id="search" placeholder="Type here to Search" autocomplete="off">
        </div>
    </divs>
    <div class="table  table-hover rounded mt-0 col-lg-12 col-md-12 col-sm-6">
        <div class="scrollme">
        <table class="table table-hover mt-5">
            <thead class="bg-primary text-white" >
            <tr>
                <th scope="col">Eray</th>
                <th scope="col">Micne</th>      
            </tr>
            </thead>

            <tbody id="output">
                <?php 
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td scope="row"><?php //echo htmlspecialchars_decode($row['eray'])?></td>
                    <td scope="row"><?php //echo htmlspecialchars_decode($row['micne'])?></td>   
                </tr>
        <?php }

        ?>
    </tbody>
    
    </table>
    </div>

    </div>
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

<!-- 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
     
</body>
</html>


