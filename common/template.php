<!DOCTYPE html>
<html lang="en">
    <?php include('common/head.php'); ?>
    <body>
        <?php 
            include ('common/header.php');
            include ('common/navigation.php');
            // if(!isset($page)||empty($page)){
            //     $page = 'actu';
            // }
            if(!isset($page)){
                $page = 'actu';
            }
            switch ($page) {
                case 'actu':
                    include('content/actu_content.php');    
                    break;
                case 'equipe':
                    include('content/equipe_content.php');
                    break;
                case 'stages':
                    include('content/stages_content.php');
                    break;
                case 'crenaux':
                    include('content/crenaux_content.php');
                    break;
                default:
                    //include('content/404.html');
                    header('Location: 404.html');
                    die();
                    break;
                    
            }
            include ('common/footer.php'); 
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
    </body>
</html>