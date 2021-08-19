<?php


     
  
// Create connection
include 'connection.php';
$sql = "SELECT * FROM xisaabta WHERE eray  LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['eray']."</td>
		          <td>".$row['micne']."</td> 
		        </tr>";
	}
}
else{
	echo "<tr class='text-center'><td>0 result's found</td></tr>";
}

?>