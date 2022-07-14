<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="../src/img/favicon.ico">
        <link rel="stylesheet" href="../src/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <?php 
            if (!isset($_GET['p'])) {
                $_GET['p'] = 'homepage';
            }

            if (!file_exists('pages/' . $_GET['p'] . '.html')) {
                $_GET['p'] = '404';
            }
        ?>
        <title><?php echo $_GET['p'] . ' ['; include 'src/php/sitetitle.php'; echo ']'; ?></title>
    </head>
    <body>
        <?php include 'src/php/nav.php' ?>
        <div class="content">
        <?php 

            echo file_get_contents('pages/' . $_GET['p'] . '.html');
            
            // Removes borders and makes cool gradient for homepage
            if ($_GET['p'] == "homepage") {
                echo '<style>.nav { border-bottom: 0px solid #343a40; }body {
                    background-image: linear-gradient(180deg, #181d2c 10%, #182235 50%);
                    background-repeat: no-repeat;
                    background-attachment: fixed;}  </style>';
            }
        ?>
</div>
        </div>
    </body>
</html>
