<?php

$db=mysqli_connect('localhost','root','','ajax1');

$sql="SELECT * FROM district ORDER BY dname asc";
 $district=mysqli_query($db,$sql);
 while($district_data = mysqli_fetch_assoc($district)){
print_r($district_data);
}

?>