<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="get">
        Name: <input type="text" name="name">
        <br>
        age <input type="number" name="age">
        <input type="submit">
    </form>
    <br>
    <?php 
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["age"];
    ?>    
</body>
</html>