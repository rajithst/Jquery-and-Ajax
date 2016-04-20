<?php

$servername = "localhost";
$username="root";
$password="";

$db=mysqli_connect($servername,$username,$password,'ajax1');


$udata=(int)$_POST['udata'];
$city_result= mysqli_query($db,"SELECT * FROM city WHERE did= '$udata' ORDER BY cname asc");

if(mysqli_num_rows($city_result)>0){
    echo '<p>City:</p>';
    echo '<select name="pcity" id="pcity">';
    echo '<option value="">-Select-</option>';

    while($city_data=mysqli_fetch_assoc($city_result)){

    echo '<option value="'.$city_data['cid'].'">' . $city_data['cname'] . '</option>';
    }

    echo '</select>';
}


?>