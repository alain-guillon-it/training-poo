<?php
$actor = $page->detail($_GET["id"]);

$movies = $page->getMovies()[$actor["id"]];
$series = $page->getSeries();
dump($actor, $movies, $series);
?>

<article class="article__detail">
  <h1><?= $actor["fullname"]; ?></h1>
  <p>
    <?= $actor["biography"]; ?>
  </p>
  <figure>
    <img src=<?= $actor["photo"]; ?> alt="">
  </figure>
  <div>
    <span>Age: <?= $actor["age"]; ?></span>
  </div>
  <section class="article__detail--movie">
    <h2>Movies</h2>
    <a href=<?= "/?page=movies&action=detail&id=" . $movies["id"]; ?>>
      <figure>
        <img src=<?= $movies["cover"]; ?> alt=<?= $movies["title"]; ?>>
        <figcaption><?= $movies["title"]; ?></figcaption>
      </figure>
    </a>
  </section>
  <section class="article__detail--series">
    <h2>Series</h2>
    <div>
      <?php foreach ($series["actors_ID"] as $serieActorsID) : ?>
        <a href=<?= "/?page=series&action=detail&id=" . $serieActorsID ?>>
          <figure>
            <img src=<?= $series[$movieActorsID]["photo"]; ?> alt="<?= $series[$movieActorsID]["fullname"]; ?>">
            <figcaption><?= $series[$movieActorsID]["fullname"]; ?></figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
</article>