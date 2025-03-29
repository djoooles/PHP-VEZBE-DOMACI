<?php    
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $ime_sajta; ?> </title>
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
    <p>&copy; <?php echo date("Y"); ?> </p>
</footer>

</body>
</html>