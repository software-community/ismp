<?php if (isset($_POST['submit'])) {
    $upload_dir = 'downloads/';
    $allowed_types = array('jpg', 'png', 'jpeg', 'pdf');

    $maxsize = 5 * 1024 * 1024;

    if (!empty(array_filter($_FILES['files']['name']))) {

        foreach ($_FILES['files']['tmp_name'] as $key => $value) {

            $file_tmpname = $_FILES['files']['tmp_name'][$key];
            $file_name = $_FILES['files']['name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

            $filepath = $upload_dir . $file_name;

            if (in_array(strtolower($file_ext), $allowed_types)) {

                if ($file_size > $maxsize)
                    echo "Error: File size is larger than the allowed limit.";

                if (move_uploaded_file($file_tmpname, $filepath)) {
                    echo "{$file_name} successfully uploaded <br />";
                } else {
                    echo "Error uploading {$file_name} <br />";
                }
            } else {

                echo "Error uploading {$file_name} ";
                echo "({$file_ext} file type is not allowed)<br / >";
            }
        }
    } else {
        echo "No files selected.";
    }

    echo"<br><br><a href='index.php'>Go Back</a>";
}
