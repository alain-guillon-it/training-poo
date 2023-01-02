<?php
$movie = $page->detail($_GET["id"]);
$director = $page->getDirectors()[$movie["realisator_ID"]];
$actors = $page->getActors();
// dump($movie, $director, $actors);
?>

<article class="article__container article__detail">
  <h1><?= $movie["title"]; ?></h1>
  <p>
    <?= $movie["synopsis"]; ?>
  </p>
  <figure>
    <img src=<?= $movie["cover"]; ?> alt="">
  </figure>
  <div>
    <span>Genre: [
      <?php foreach ($movie["genre"] as $genre) : ?>
        <?= $genre; ?>,
      <?php endforeach; ?>
      ]
    </span>
    <span>Année: <?= $movie["year"]; ?></span>
  </div>
  <section class="article__detail--director">
    <h2>Director</h2>
    <a href=<?= "/?page=directors&action=detail&id=" . $director["id"]; ?>>
      <figure>
        <img src=<?= $director["photo"]; ?> alt=<?= $director["fullname"]; ?>>
        <figcaption><?= $director["fullname"]; ?></figcaption>
      </figure>
    </a>
  </section>
  <section class="article__detail--actors">
    <h2>Actors</h2>
    <div>
      <?php foreach ($movie["actors_ID"] as $movieActorsID) : ?>
        <a href=<?= "/?page=actors&action=detail&id=" . $movieActorsID ?>>
          <figure>
            <img src=<?= $actors[$movieActorsID]["photo"]; ?> alt="<?= $actors[$movieActorsID]["fullname"]; ?>">
            <figcaption><?= $actors[$movieActorsID]["fullname"]; ?></figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
</article>