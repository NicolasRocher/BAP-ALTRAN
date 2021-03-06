<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <title>Site SISTER</title>
    <link href='https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic|Montserrat:400,700|Cardo:400italic|Advent+Pro:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<nav class="nav">
    <div class="burger">
        <div class="burger__patty"></div>
    </div>

    <ul class="nav__list">
        <li class="nav__item">
            <a href="index.php" class="nav__link">Index</a>
        </li>
        <li class="nav__item">
            <a href="projet.php" class="nav__link c-yellow scrolly">Projet</a>
        </li>
        <li class="nav__item">
            <a href="propos.php" class="nav__link c-red">A Propos</a>
        </li>
    </ul>
</nav>

<body>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">


    $(document).ready(function(){
        $(".tilt").click(function(){
            $(".bonjour").fadeOut(100);
            $(".reveal").slideDown()(1000);
        });

        $(".retour").click(function(){
            $(".bonjour").fadeIn(1000);
            $(".reveal").hide();
        });
    });

</script>
<script type="text/javascript">


    $(document).ready(function(){
        $(".tilt2").click(function(){
            $(".bonjour2").fadeOut(100);
            $(".reveal2").slideDown()(1000);
        });

        $(".retour2").click(function(){
            $(".bonjour2").fadeIn(1000);
            $(".reveal2").hide();
        });
    });

</script>