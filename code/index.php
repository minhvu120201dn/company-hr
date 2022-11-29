<?php   
    include ('./header.php');
    if(!isset($_GET['page'])){
        include('./projects.php');
    }
    else{
        switch($_GET['page'])
        {
            case 'projects':
                include('./pages/home.php');
                break;  
        }
    }
?>