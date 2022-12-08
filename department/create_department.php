<?php
include "../utils.php";
$conn = connect_to_database();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /////   CONNNECT AND RETRIEVE DATA      /////
    if (isset($_POST['submit'])) {
        $title = $_POST['detitle'];
        $assign = $_POST['proid1'];
        $id = $_POST['proid'];
        $sql = "INSERT INTO departments (department_name) VALUES ('$title')";
        $sql1 = "SELECT * FROM departments WHERE department_name='$title'";
        $result2 = $conn->query($sql1); 
        if($assign!=Null) {
        if ($conn->query($sql) === TRUE) 
                {foreach ($result2 as $b) {
                    $ids = $b['department_id'];
                }
                $sql4 = "INSERT INTO employees_in_departments (employee_id,department_id,is_manager) VALUES ('$assign','$ids','1') ";
                if ($conn->query($sql4) === TRUE) {
                    header("Location: ../department");}
                    
            }
        }
        else {
            if ($conn->query($sql) === TRUE) 
                    {foreach ($result2 as $b) {
                        $ids = $b['department_id'];
                    }
                    $sql4 = "INSERT INTO employees_in_departments (employee_id,department_id,is_manager) VALUES ('".implode($id)."','$ids','1') ";
                    if ($conn->query($sql4) === TRUE) {
                        header("Location: ../department");}
                        
                  
                
                }
            }
}
$conn->close();
}
?>