<?php
// receive a GET parameter "id", which contains the book id.
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the favorites cookie exists
    if (isset($_COOKIE["favorites"])) {
        $favorites = explode(",", $_COOKIE["favorites"]);
    } else {
        $favorites = [];
    }

    // If the book id is in favorites, remove it; otherwise, add it
    if (in_array($id, $favorites)) {
        $favorites = array_diff($favorites, array($id)); // Remove the book id from favorites
    } else {
        $favorites[] = $id; // Add the book id to favorites
    }

    // Save the favorites array as a cookie
    $favorites_string = implode(",", $favorites);
    setcookie("favorites", $favorites_string, time() + 86400 * 30, "/"); // Expires in 30 days
}

// Redirect back to booksite.php
header("Location: booksite.php");
exit();
?>
