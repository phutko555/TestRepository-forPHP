<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 1</title>
</head>
<body>
    <?php
        echo $_GET['parametri1'];
        echo "<br>";
        echo $_GET['parametri2'];
        echo "<hr><hr>";
    ?>
    <h1>Lecture 1</h1>
    <?php
        echo "<h3>This is a code from PHP!!!</h3>"; 
        $x = 34;
        echo $x;
        $ar1 = [4, 6, "Hello"];
        echo "<hr>"; 
        print_r($ar1);
        echo "<hr>";
        $ar2 = ['name'=>"Giorgi", 'age'=>20, 'gpa'=>4, 'subjects'=>["Programming", "Web"]];
        echo "<hr>"; 
        print_r($ar2);
    ?>
</body>
</html>