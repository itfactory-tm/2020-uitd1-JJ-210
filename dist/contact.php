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

<body class="bg-contactformulier">

<div class="text-center contactmargin">
    <h1 class="text-white">Uw formulier</h1>
    <p class="text-white">Hierkomen al uw keuzes nog eens op een rijtje te staan!</p>
    <br>
    <?php
    if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "") {
        echo '<p class="text-white"> Ingevuld bij voornaam: ' . $_POST["voornaam"] . "</p>\n";
} else {
        echo '<p class="text-white"> Voornaam werd niet ingevuld </p>\n';
}

    if (isset($_POST["achternaam"]) && $_POST["achternaam"] != "") {
        echo '<p class="text-white"> Ingevuld bij achternaam: ' . $_POST["achternaam"] . "</p>\n";
} else {
        echo '<p class="text-white"> Achternaam werd niet ingevuld </p>\n';
}

    if (isset($_POST["email"]) && $_POST["email"] != "") {
        echo '<p class="text-white"> Ingevuld bij email: ' . $_POST["email"] . "</p>\n";
} else {
        echo '<p class="text-white"> Email werd niet ingevuld </p>\n';
}

    if (isset($_POST["graffiti"]) && $_POST["graffiti"] != "") {
        echo '<p class="text-white"> Ingevuld bij de vraag: ' . $_POST["graffiti"] . "</p>\n";
} else {
        echo '<p class="text-white"> De vraag werd niet ingevuld </p>\n';
}

    if (isset($_POST["opmerking"]) && $_POST["opmerking"] != "") {
        echo '<p class="text-white"> Ingevuld bij opmerkingen: ' . $_POST["opmerking"] . "</p>\n";
} else {
        echo '<p class="text-white"> Opmerkingen werd niet ingevuld </p>\n';
}

    ?>
    <br>
    <a type="button" class="btn btn-primary green">Terug naar pagina</a>
</div>

</body>

</html>
