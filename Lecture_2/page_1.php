<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <a href="page_1.php">HOME PAGE</a>
    </p>
    <p>
        <a href="?user=ბონდო&age=34">USER DATA</a>
        
    </p>
    <?php
    if(!isset($_GET['user']) || !isset($_GET['age'])){
        echo "მომხმარებლის მონაცემები არ არის მითითებული";
        exit();
    }
    $user = $_GET['user'];
    $age = $_GET['age'];
    echo $user;
    echo $age;

    ?>
</body>
</html>