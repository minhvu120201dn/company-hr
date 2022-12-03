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
    <!-- sidebar and header -->
    <div class="container-fluid px-0">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal bg-dark">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                        <a href="#" class="nav-link text-white">
                            <i class="fa-brands fa-google fa-2xl"></i>
                        </a>
                        
                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-chart-line"></i>
                            Dashboard
                        </a>
                    
                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-users"></i>
                            Employees
                        </a>
                    
                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-building"></i>
                            Department
                        </a>
                    
                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-folder"></i>
                            Projects
                        </a>
                    </div>               
                </div>
            </div>
            <div class="col px-0">
                <header class="d-flex bg-dark flex-wrap align-items-center justify-content-center justify-content-sm-between py-1 mb-2 border-bottom ">
                    <ul class="nav col-sm-auto mb-2 align-items-center justify-content-center mb-sm-0">
                        <li><a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" ><i class="fa-solid fa-bars mx-4 text-white"></i></a></li>
                    </ul>
                    <div class="col-sm-3 text-end dropdown">
                        <button type="button" class="btn btn-outline-light me-2 dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-user"></i>
                            My Account
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-white" href="#">Sign in as <?php echo $_SESSION['username'];?></a></li>
                            <li><a class="dropdown-item text-white" href="#">Link 2</a></li>
                            <li><a class="dropdown-item text-white" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </header>
                <!-- content -->
                <?php
                    include "dashboard.php";
                ?>
            
            </div>    
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>