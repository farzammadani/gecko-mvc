<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <ul>
        <?php foreach ($users as $user): ?>
        <li><?php echo $user['name']; ?> - <?php echo $user['email']; ?> </li>
        <?php endforeach; ?>
    </ul>

    <a href="?controller=random&action=random">View random number generator page</a>
</body>
</html>