<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Médiathèque Potter</title>

</head>

<body>
    <header>
        <h1>Médiathèque Potter</h1>
    </header>
    <div class="container">
        <div class="content">
            <?php
            require_once 'Book.php';
            require_once 'Movie.php';
            require_once 'Album.php';
            require_once 'Song.php';
            require_once 'Artist.php';

            // Livre
            $book = new Book("Thomas et sa BMW", "Thomas Spencer", 309);
            $book->toggleCheckOutStatus();
            $book->addRating(3);
            $book->addRating(1);
            $book->addRating(9);
            echo "<p>" . $book->getTitle() . " est " . ($book->getIsCheckedOut() ? "emprunté" : "disponible") . " avec une note moyenne de " . $book->getAverageRating() . ".</p>";

            // Film
            $movie = new Movie("Scarface", "IconStudio", 181);
            $movie->toggleCheckOutStatus();
            $movie->addRating(7);
            $movie->addRating(5);
            $movie->addRating(2);
            echo "<p>" . $movie->getTitle() . " est " . ($movie->getIsCheckedOut() ? "emprunté" : "disponible") . " avec une note moyenne de " . $movie->getAverageRating() . ".</p>";

            // Album avec Chansons
            $artist = new Artist("PNL");
            $song1 = new Song("Au DD", $artist->getName(), 242);
            $song2 = new Song("91's", $artist->getName(), 297);
            $album = new Album("Deux frères", $artist->getName(), [$song1, $song2]);
            $album->toggleCheckOutStatus();
            $album->addRating(4);
            $album->addRating(4);
            $album->addRating(5);
            echo "<p>" . $album->getTitle() . " par " . $artist->getName() . " est " . ($album->getIsCheckedOut() ? "emprunté" : "disponible") . " avec une note moyenne de " . $album->getAverageRating() . ".</p>";
            ?>
        </div>
    </div>
</body>

</html>