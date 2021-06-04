<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$stringa = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, molestias ullam. Autem recusandae possimus voluptatibus tempore non, itaque minima molestias eius, dolorum consequatur, nam exercitationem distinctio iste. Harum, dolorum animi?";
?>

<p> <?php echo $stringa ?> </p>
<h3> la stringa è lunga: <?php echo strlen($stringa) ?> caratteri </h3>

<?php 
$toSearch = $_GET['ciao'];
$nuovaStringa = str_replace($toSearch, "***", $stringa);
?>

<p> <?php echo $nuovaStringa ?> </p>
<h3> la stringa è lunga: <?php echo strlen($nuovaStringa) ?> caratteri </h3>

</body>
</html>