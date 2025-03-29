<?php
    $moj_sajt = "Copyright &copy mojsajt";
    $ime_sajta = "Postani programer ";
    $linkovi = [
        "Glavna" => "index.php",
        "O nama" => "about.php",
        "Kontakt" => "contact.php"
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Postani Programer</title>
</head>
<body>
    <h1><?php echo $ime_sajta; ?> </h1>
    <div class="...">
    <nav>
    <a href="<?php echo $linkovi["Glavna"]; ?>"><?php echo "Glavna"; ?></a>
    <a href="<?php echo $linkovi["O nama"]; ?>"><?php echo "O nama"; ?></a>
    <a href="<?php echo $linkovi["Kontakt"]; ?>"><?php echo "Kontakt"; ?></a>
    </nav>
    <footer>
        </p>
        <?php echo $moj_sajt . " " .date("Y"); ?> </p>
</footer>
</body>
</html>