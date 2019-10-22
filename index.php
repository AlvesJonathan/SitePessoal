<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Jonathan</title>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="coin-slider/coin-slider-styles.css" type="text/css" />
    <link rel="icon" type="text/css" href="img/icon3.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Gugi');
    </style>
</head>

<body>
   <div class="teste">
       <?php   
            include_once 'menu.php';
            include_once 'slide.php';
            include_once 'quemsou.php';
            include_once 'servicos.php';
            include_once 'portfolio.php';
            include_once 'contatos.php';       
    ?>
   </div>
   
<!--------------------------------------- JavaScript --------------------------------------->
    <script src="js/bootstrap.min.js"></script>
    <script src="jscript/funcoes.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="coin-slider/coin-slider.min.js"></script>
    <script src="jsscript/jsproprio.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#coin-slider').coinslider({
                height: 450,
                width: 1200,
                navigation: false,
                delay: 500
            });
        });
    </script>
</body>

</html>