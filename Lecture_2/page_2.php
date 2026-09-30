<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <a href="page_2php">HOME PAGE</a>
    </p>

    <form>
        <input type="text" name="subject"> - საგანი 
        <br><br>
         <input type="text" name="nishani"> - ნიშანი
         <br><br>
         <button input type="submit">გაგზავნა</button>
</form>

<?php
if(!isset($_GET['subject']) || !isset($_GET['nishani'])){
    echo "მონაცემები არ არის მითითებული";
    exit();
}
    $x =  $_GET['subject'];
    $y =  $_GET['nishani'];

    echo "$x არის კომპიუტერული საგანი და მისი ნიშანია $y";

?>

</body>
</html>   