<article class="article__container">
  <h1>OOP Project</h1>
  <p>Welcome to this website. It's writing with php and i used the oop concept.</p>

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
    <a href="/?page=movies&action=list">
      Show all list
    </a>
  </section>

  <section>
    <h2>Three last series</h2>
    <div>
      <?php foreach ($page->getLastThreeSeries() as $serie) : ?>
        <a href=<?= "/?page=series&action=detail&id=" . $serie["id"] ?>>
          <figure>
            <img src=<?= $serie["cover"]; ?> alt=<?= "The cover of " . $serie["title"] . " serie." ?>>
            <figcaption>
              <?= $serie["title"]; ?>
            </figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
    <a href="/?page=series&action=list">
      Show all list
    </a>
  </section>

  <section>
    <h2>Three last actors</h2>
    <div>
      <?php foreach ($page->getLastThreeActors() as $actor) : ?>
        <a href=<?= "/?page=actors&action=detail&id=" . $actor["id"]; ?>>
          <figure>
            <img src=<?= $actor["photo"]; ?> alt=<?= "The cover of " . $actor["fullname"] . " movie."; ?>>
            <figcaption>
              <?= $actor["fullname"]; ?>
            </figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
    <a href="/?page=actors&action=list">
      Show all list
    </a>
  </section>

  <section>
    <h2>Three last directors</h2>
    <div>
      <?php foreach ($page->getLastThreeDirectors() as $directors) : ?>
        <a href=<?= "/?page=directors&action=detail&id=" . $directors["id"]; ?>>
          <figure>
            <img src=<?= $directors["photo"]; ?> alt=<?= "The photo of " . $directors["fullname"] . " realisator."; ?>>
            <figcaption>
              <?= $directors["fullname"]; ?>
            </figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
    <a href="/?page=directors&action=list">
      Show all list
    </a>
  </section>

</article>