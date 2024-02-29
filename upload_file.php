<?php
if ($_FILES["file"]["error"] == UPLOAD_ERR_OK && is_uploaded_file($_FILES["file"]["tmp_name"])) {
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];

    // Specify the directory where you want to store the uploaded file
    $upload_dir = "uploads/user/";

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($file_tmp, $upload_dir . $file_name)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Error: No file uploaded or an error occurred during upload.";
}
