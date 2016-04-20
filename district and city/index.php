<?php

$servername = "localhost";
$username="root";
$password="";

$db=mysqli_connect($servername,$username,$password,'ajax1');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ajaxjquery</title>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $('#plocation').change(function(){
            var postdata=$('#plocation').val();

            $('#image').fadeIn('slow');
            $('#loadcity').css('display:none');

            $.ajax({
                type:'post',
                url:'loadcity.php',
                data:{udata:postdata},
                success:function(data){
                    $('#image').css("display","none");
                    $('#loadcity').html(data).fadeIn("slow");
                }
            });
        });
    });

    </script>
</head>
<body>
<div id="main">
    <form action="" method="post" name="form1" id="form1" enctype="multipart/form-data">
            <p>District</p>
        
        <select name="plocation" id="plocation">

            <option value="">-Select-</option>
            <?php

                $sql="SELECT * FROM district ORDER BY dname asc";
                $district=mysqli_query($db,$sql);
               while($district_data = mysqli_fetch_assoc($district)){
                echo '<option value = " '.$district_data['did'] . '"> '. $district_data['dname'].'</option>';
               
               }
                
                    

            ?>
        </select>

        <img src="ajax-loader.gif" alt="" style="display:none;" id="image">
        <div style="display:none;" id="loadcity"></div>
    </form>
</div>


    
</body>
</html>