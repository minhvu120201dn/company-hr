
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Company-HR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="*/style.css">
    <script src="https://kit.fontawesome.com/bd5d5fa01b.js" crossorigin="anonymous"></script>
    
    <title>Company-HR</title>
</head>
<body>
    <?php
        include '../utils.php';
        include "../header.php";
        include "dashboard.php";
    ?>
    <?php
        // if(!isset($_GET['page'])){
        //     include('dashboard/dashboard.php');
        // }
        // else {
        //     switch($_GET['page'])
        //     {
        //         case 'dashboard':
        //             include('dashboard/dashboard.php');
        //             break;
        //         case 'employees':
        //             include('employees/signup.php');
        //             break;
        //         case 'department':
        //             include('projects/projects.php');
        //             break;   
        //         case 'projects':
        //             include('projects/projects.php');
        //             break;
        //         case 'tasks':
        //             include('projects/tasks.php');
        //             break;
        //         case 'fields':
        //             include('projects/fields.php');
        //             break;
        //     }
        // }
    ?>
    <script src="script.js"></script>
</body>
</html>