div class="container-fluid px-0">
    <div class="offcanvas offcanvas-start offcanvas-sm bg-dark" id="sidebar">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title text-white">Sidebar</h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav nav-pills flex-sm-column mb-auto">
                <li>
                    <a href="#" class="nav-link text-white">
                        <i class="fa-solid fa-chart-line"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="employees" class="nav-link text-white">
                        <i class="fa-solid fa-users"></i>
                        Employees
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <i class="fa-solid fa-building"></i>
                        Department
                    </a>
                </li>
                <li>
                    <a href="projects" class="nav-link text-white">
                        <i class="fa-solid fa-folder"></i>
                        Projects
                    </a>
                </li>
            </ul>
        </div>   
    </div>
    <header class="d-flex bg-dark flex-wrap align-items-center justify-content-center justify-content-sm-between py-1 mb-2 border-bottom ">
    <ul class="nav col-sm-auto mb-2 align-items-center justify-content-center mb-sm-0">
        <li><button class="btn btn-dark py-2" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
            <i class="fa-solid fa-bars"></i>
        </button></li>
        <!-- <li><a href="#" class="nav-link text-white">Home</a></li>
        <li><a href="#" class="nav-link text-white">Features</a></li>
        <li><a href="#" class="nav-link text-white">About</a></li> -->
    </ul>
    <div class="col-sm-3 text-end dropdown">
        <button type="button" class="btn btn-outline-light me-2 dropdown-toggle" data-bs-toggle="dropdown">
            <i class="fa-solid fa-user"></i>
            <?php echo $_SESSION['username'];?>
        </button>
        <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-white" href="#">Signed in as <?php echo $_SESSION['username'];?></a></li>
            <li><a class="dropdown-item text-white" href="./logout/logout.php">Sign out</a></li>
        </ul>
    </div>
    </header>
</div>