<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        
        switch($grade){
            case "A":
                echo "You did amazing";
                break;
            case "B":
                echo "You did great";
                break;
            case "C":
                echo "you could do better";
                break;
            case "D":
                echo "you need to try harder";
                break;
            case "F":
                echo "you failed the test";
                break;
            default:
            echo "invalid grade";
        }
    ?>

</body>
</html>