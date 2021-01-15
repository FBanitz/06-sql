<?php
    require_once('./includes/bdd.inc.php');
?>

<!DOCTYPE html>

<html lang="fr">

    <head>
        <?php
            require_once('./templates/head.inc.html');
        ?>
    </head>

    <body>

        <header>
            <?php
                require('./templates/header.html');
            ?>
        </header>

        <main class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <?php
                        require('./templates/nav.html')
                    ?>
                </div>
                <div class="col-9">
                    <?php
                        if(isset($_GET['read'])){
                            require_once('./includes/read.inc.php');
                        }
                        elseif(isset($_GET['create'])){
                            require_once('./includes/create.inc.php');
                        }
                        else{
                            echo '<h2 class="p-5">Bienvenue !</h2>';
                        }
                    ?>
                </div>
            </div>
        </main>

        <footer>
            <?php
                require('./templates/footer.html');
            ?>
        </footer>

    </body>

</html>