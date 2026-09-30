<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="saxeli"> - სახელი
        <br> <br>
         <input type="text" name="gvari"> - გვარი
         <br> <br>
          <input type="text" name="job"> - დაკავებული თანამდებობა
          <br> <br>
           <input type="number" name="xelfasi"> - ხელფასის რაოდენობა
           <br> <br>
            <input type="number" name="procenti" value="20"> - პროცენტი
             <br> <br>
           <button type="submit">გაგზავნა</button>
           <br><br>
</form>
    <?php 
    
if(isset($_GET['saxeli']) && isset($_GET['gvari']) && isset($_GET['job']) && isset($_GET['xelfasi']) && isset($_GET['procenti'])){
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
      echo "<tr><th>სახელი</th><th>გვარი</th><th>თანამდებობა</th><th>ხელფასი</th><th>პროცენტი</th><th>ხელზე ასაღები თანხა</th></tr>";
      $xelzeAsagebi = $_GET['xelfasi'] * $_GET['procenti'] / 100;
      echo "<tr><td>" . $_GET['saxeli'] . "</td><td>" . $_GET['gvari'] . "</td><td>" . $_GET['job'] . "</td><td>" . $_GET['xelfasi'] . "</td><td>" . $_GET['procenti'] . "%</td><td>" . $xelzeAsagebi . "</td></tr>";
      echo "</table>";
       
    }
    
    ?>
</body>

</html>