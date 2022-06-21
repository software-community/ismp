<?php
    $type = "SELECT * FROM blog_view WHERE id='$blog_id'";
    $records = mysqli_query($conn, $type);
    while ($record = mysqli_fetch_assoc($records)) {
        $view = $record['views'];
        echo"&nbsp&nbsp$view";
    }
?>