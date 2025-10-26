<?php
$bookInfo = [
    "Harry Potter" => ["author" => "J.K. Rowling", "year" => 1997, "genre" => "Fantasy"],
    "The Hobbit" => ["author" => "J.R.R. Tolkien", "year" => 1937, "genre" => "Fantasy"],
    "Sherlock Holmes" => ["author" => "Arthur Conan Doyle", "year" => 1892, "genre" => "Mystery"],
];

function getBookInfo($title, $bookInfo) {
    if (isset($bookInfo[$title])) {
        $info = $bookInfo[$title];
        echo "Title: $title<br>";
        echo "Author: " . $info['author'] . "<br>";
        echo "Year: " . $info['year'] . "<br>";
        echo "Genre: " . $info['genre'] . "<br>";
    } else {
        echo "Book not found.<br>";
    }
}

// Example
getBookInfo("Harry Potter", $bookInfo);
getBookInfo("Unknown Book", $bookInfo);
?>
