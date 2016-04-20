<?php

require 'db.php';

if (isset($_POST['search_term'])) {
    
    $search_term= mysqli_real_escape_string($db,htmlentities($_POST['search_term']));
    if (!empty($search_term)) {
        
        $search = mysqli_query($db,"SELECT place,description FROM users WHERE place LIKE '%$search_term%'");
        $result_count= mysqli_num_rows($search);
        $suffix= ($result_count != 1) ? 's' : '';

        echo '<p> your search for <strong> ' .$search_term . '</strong> returned <strong>' .$result_count . '</strong> result ' .$suffix.'</p>';


        while ($result_row= mysqli_fetch_assoc($search)) {
            echo '<p><strong>'. $result_row['place'].'</p></strong><br/>'.$result_row['description'].'</p>';
            
        }

    }


}

?>