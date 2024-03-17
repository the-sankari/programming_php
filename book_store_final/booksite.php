<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Favorite Books</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bookstore.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Your Favorite Books</h1>
        </header>
        <nav id="main-navi">
            <ul>
                <li><a href="booksite.php">Home</a></li>
                <li><a href="booksite.php?genre=adventure">Adventure</a></li>
                <li><a href="booksite.php?genre=classic">Classic Literature</a></li>
                <li><a href="booksite.php?genre=coming-of-age">Coming-of-age</a></li>
                <li><a href="booksite.php?genre=fantasy">Fantasy</a></li>
                <li><a href="booksite.php?genre=historical">Historical Fiction</a></li>
                <li><a href="booksite.php?genre=horror">Horror</a></li>
                <li><a href="booksite.php?genre=mystery">Mystery</a></li>
                <li><a href="booksite.php?genre=romance">Romance</a></li>
                <li><a href="booksite.php?genre=scifi">Science Fiction</a></li>
            </ul>
        </nav>
        <main>
            <div class="main-container">

            <?php
                // Read the file into array variable $books:
                $json = file_get_contents("books.json");
                $books = json_decode($json, true);

                // Check if a genre is specified in the URL
                $genre = isset($_GET['genre']) ? $_GET['genre'] : null;

                // Filter books based on the genre
                $filteredBooks = ($genre && $genre !== 'all') ? array_filter($books, function($book) use ($genre) {
                    return in_array($genre, $book['genres']);
                }) : $books;

                // Loop through the filtered books and display them
                foreach ($filteredBooks as $book) {
                    $id = $book['id'];
                    $title = $book['title'];
                    $author = $book['author'];
                    $year = $book['year'];
                    $description = $book['description'];
                    // get the favorite behaivor
                    $isFavorite = isset($_COOKIE['favorites']) && in_array($id, explode(',', $_COOKIE['favorites'])); 

                    echo "<section class='book'>";
                    echo "<a class='bookmark fa " . ($isFavorite ? "fa-star" : "fa-star-o") . "' href='setfavorite.php?id=$id'></a>";
                    echo "<h3>$title</h3>";
                    echo "<p class='publishing-info'>";
                    echo "<span class='author'>$author</span>,";
                    echo "<span class='year'>$year</span>";
                    echo "</p>";
                    echo "<p class='description'>$description</p>";
                    echo "</section>";
                }
            ?>
            </div>

        </main>
    </div>    
</body>
</html>
