<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Nums!</title>
</head>
<body>
    <h1>Random Number generation.</h1>
    <ul>
        <?php 
        for ($x = 0; $x <= 10; $x++)
        {
            $counter = $x + 1;
            echo "Number " . $counter . ": " . rand(1, 100) . " <br>";
        }
        
        ?>
    </ul>

    <a href="?controller=user&action=index"> View index with list of users and action of index</a>
</body>
</html>