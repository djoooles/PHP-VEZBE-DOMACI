<?php
$imena = [
    "Glavna" => "index.php",
    "O nama" => "about.php",
    "Kontakt" => "contact.php"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domaci zadatak</title>
</head>
<body>
        <?php foreach($imena as $naziv => $link): ?>
            <a href="<?= $link ?>"><?= $naziv ?></a>
        <?php endforeach; ?>
</body>
</html>
