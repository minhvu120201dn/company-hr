<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/bd5d5fa01b.js" crossorigin="anonymous"></script>

    <title>Company-HR</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <?php
        if(!isset($_GET['page'])) require 'login/login.php';
        else {
            switch ($_GET['page']) {
                case 'dashboard': {
                    include 'dashboard.php';
                    break;
                }
                case 'projects': {
                    include 'projects/projects.php';
                    break;
                }
                case 'employee': {
                    include 'employees/signup.php';
                    break;
                }
                case 'login_authentication': {
                    include 'login/login_authentication.php';
                    break;
                }
            }
        }
        
    ?>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>