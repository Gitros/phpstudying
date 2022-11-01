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
        class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($name) {
                echo "$name <br>";
            }
        } 

        $book1 = new Book("mike");
        $book1 -> title = "Harry Potter";
        $book1 -> author = "Jk Rowling";
        $book1 -> pages = "500";

        $book2 = new Book("tom");
        $book2 -> title = "lord of the rings";
        $book2 -> author = "tolkien";
        $book2 -> pages = "700";

        

    ?>

</body>
</html>