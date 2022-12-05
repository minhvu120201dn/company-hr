

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Company-HR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="*/style.css">

    <script src="https://kit.fontawesome.com/bd5d5fa01b.js" crossorigin="anonymous"></script>
    
    <title>Company-HR</title>
</head>
<body>
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
                
                    <a href="employees" class="nav-link text-white">
                        <i class="fa-solid fa-users"></i>
                        Employees
                    </a>
                
                    <a href="#" class="nav-link text-white">
                        <i class="fa-solid fa-building"></i>
                        Department
                    </a>
                
                    <a href="projects" class="nav-link text-white">
                        <i class="fa-solid fa-folder"></i>
                        Projects
                    </a>
                </div>               
            </div>
        </div>
        <main class="col px-0">
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
                        <li><a class="dropdown-item text-white" href="#">Sign out</a></li>
                    </ul>
                </div>
            </header>
        </main>    
    </div>
</div>
</body>
</html>