<article>
  <h1>Movies</h1>
  <p>I proposed a list of <strong><?= count($page->list()); ?></strong> movies.</p>
  <a href="/?page=movies&action=list">Show all movies</a>

  <section>
    <h2>Three last movies</h2>
    <div>
      <?php foreach ($page->getLastThreeMovies() as $movie) : ?>
        <a href=<?= "/?page=movies&action=detail&id=" . $movie["id"]; ?>>
          <figure>
            <img src=<?= $movie["cover"]; ?> alt=<?= "The cover of " . $movie["title"] . " movie."; ?>>
            <figcaption>
              <?= $movie["title"]; ?>
            </figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
</article>