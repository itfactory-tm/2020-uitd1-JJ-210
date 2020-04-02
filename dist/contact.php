<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uw keuzes</title>

    <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">
</head>

<body class="bg-contact">
<nav id="sidebar-wrapper" class="bg-dark">
    <ul class="sidebar-nav bg-dark">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="#page-top">Blank Canvas</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#teamcolors">Team Colors</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#artworks">Artworks</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#artstyles">Art Styles</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#questions">Questions</a>
        </li>
    </ul>
</nav>

<!-- Navigation -->
<nav class="navbar-expand-lg navpos">
    <div class="container">
        <div class="row">
            <div class="collapse navbar-collapse col-lg-12">
                <div class="collapse navbar-collapse">
                    <a class="nav-item nav-link text-body col-lg-2" href="#"><h2 class="home">Home</h2></a>
                    <a class="nav-item nav-link text-body col-lg-3" href="#teamcolors"><h2 class="team">Team Colors</h2></a>
                    <a class="nav-item nav-link text-body col-lg-3" href="#artworks"><h2 class="artworks">Artworks</h2></a>
                    <a class="nav-item nav-link text-body col-lg-3" href="#artstyles"><h2 class="artstyles">Art Styles</h2></a>
                    <a class="nav-item nav-link text-body col-lg-2" href="#questions"><h2 class="questions">Questions?</h2></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<h1>Uw formulier</h1>
<p>Hierkomen al uw keuzes nog eens op een rijtje te staan!</p>
<hr>
<?php
if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "") {
    echo "<p> Ingevuld bij voornaam: " . $_POST["voornaam"] . "</p>\n";
} else {
    echo "<p> Voornaam werd niet ingevuld </p>\n";
}

if (isset($_POST["achternaam"]) && $_POST["achternaam"] != "") {
    echo "<p> Ingevuld bij achternaam: " . $_POST["achternaam"] . "</p>\n";
} else {
    echo "<p> Achternaam werd niet ingevuld </p>\n";
}

if (isset($_POST["email"]) && $_POST["email"] != "") {
    echo "<p> Ingevuld bij email: " . $_POST["email"] . "</p>\n";
} else {
    echo "<p> Email werd niet ingevuld </p>\n";
}

if (isset($_POST["graffiti"]) && $_POST["graffiti"] != "") {
    echo "<p> Ingevuld bij de vraag: " . $_POST["graffiti"] . "</p>\n";
} else {
    echo "<p> De vraag werd niet ingevuld </p>\n";
}

if (isset($_POST["opmerking"]) && $_POST["opmerking"] != "") {
    echo "<p> Ingevuld bij opmerkingen: " . $_POST["opmerking"] . "</p>\n";
} else {
    echo "<p> Opmerkingen werd niet ingevuld </p>\n";
}

?>

</body>

</html>
