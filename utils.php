<?php
function connect_to_database() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "company-hr";
    return new mysqli($servername, $username, $password, $db_name);
}

function all_requirements_are_set($requirements) {
    foreach ($requirements as $requirement) {
        if (!isset($_POST[$requirement])) {
            return false;
        }
    }
    return true;
}

$conn = connect_to_database();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
