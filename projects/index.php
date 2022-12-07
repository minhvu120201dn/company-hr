
    <?php
    include "../header.php";
    ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <?php
            if(!isset($_GET['page'])){
                include('./projects.php');
            }
            else{
                switch($_GET['page'])
                {
                    case 'projects':
                        include('./projects.php');
                        break;
                    case 'tasks':
                        include('./tasks.php');
                        break;   
                    case 'fields':
                        include('./fields.php');
                        break;
                }
            }
            ?>
        </div>
    </div>