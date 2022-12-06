<?php
session_start();
include "../utils.php";

$conn = connect_to_database();

$requirements = ["first-name", "middle-name", "last-name", "avatar", "birth", "department", "role", "email", "phone-number", "notes"];
if (all_requirements_are_set($requirements)) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

if (isset($_FILES["avatar"])) {
    $img_file = $_FILES["avatar"];

    // File properties
    $file_name = $img_file["name"];
    $file_tmp = $img_file["tmp_name"];
    $file_size = $img_file["size"];
    $file_error = $img_file["error"];

    // Work out the file extension
    $file_ext = explode(".", $file_name);
    $file_ext = strtolower(end($file_ext));
    
    $allowed = array("jpg", "jpeg", "png");

    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size <= 2097152) {
                $file_name_new = uniqid('', true).'.'.$file_ext;
                $imgfile_destination = "../uploads/".$file_name_new;

                if (!move_uploaded_file($file_tmp, $imgfile_destination)) {
                    // header("Location: index.php?page=products&add_product&&error=File upload failed ".$imgfile_destination);
                    exit();
                }
            }
        }
    }
    else {
        header("Location: ./");
        exit();
    }
}
else {
    header("Location: ./");
    exit();
}


if (isset($file_name_new)) {
    $file_name_new = "'".$file_name_new."'";
}
else {
    $file_name_new = "NULL";
}

$sql = "UPDATE employees SET WHERE email = '".$_POST["email"]."'";

if (!mysqli_query($conn, $sql)) {
    header("Location: ./index.php?page=products&add_product&&error=".$sql.$conn->error);
    exit();
}
else {
    header("Location: ./index.php");
    exit();
}
?>