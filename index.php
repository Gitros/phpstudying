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
        class Movie {
            public $title;
            public $rating;

            function __construct($title, $rating){
                $this -> title = $title;
                $this -> rating = $rating;

            }
        }

        $avengers = new Movie("avengers", "PG-13");

        echo $avengers -> rating;
    ?>

</body>
</html>