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
    <div class="container-fluid px-0">
        <div class="col-sm-2">
            <div class="offcanvas offcanvas-start offcanvas-sm bg-dark" id="sidebar">
                <div class="offcanvas-header">
                    <h1 class="offcanvas-title text-white">Sidebar</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="#" class="nav-link text-white">
                                <i class="fa-solid fa-chart-line"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <i class="fa-solid fa-users"></i>
                                Employee
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <i class="fa-solid fa-building"></i>
                                Department
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <i class="fa-solid fa-folder"></i>
                                Projects
                            </a>
                        </li>
                    </ul>
                </div>   
            </div>
        </div>
        <header class="d-flex bg-dark flex-wrap align-items-center justify-content-center justify-content-sm-between py-1 mb-2 border-bottom ">

        <ul class="nav col-sm-auto mb-2 align-items-center justify-content-center mb-sm-0">
            <li><button class="btn btn-dark py-2" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                <i class="fa-solid fa-bars"></i>
            </button></li>
            <li><a href="#" class="nav-link text-white">Home</a></li>
            <li><a href="#" class="nav-link text-white">Features</a></li>
            <li><a href="#" class="nav-link text-white">About</a></li>
        </ul>

        <div class="col-sm-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
        </header>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>