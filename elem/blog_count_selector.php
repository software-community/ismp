<?php
    $sql = "UPDATE blog_view SET views = views+1 WHERE id = '$blog_id'";
    $conn->query($sql);
    $type = "SELECT * FROM blog_view WHERE id='$blog_id'";
    $records = mysqli_query($conn, $type);
    while ($record = mysqli_fetch_assoc($records)) {
        $view = $record['views'];
    }
?>