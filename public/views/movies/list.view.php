<article class="article__list ">
  <h1>Movies Galleries</h1>
  <section>
    <?php foreach ($page->list() as $movie) : ?>
      <a href=<?= "/?page=movies&action=detail&id=" . $movie["id"]; ?>>
        <figure>
          <img src=<?= $movie["cover"]; ?> alt=<?= "The cover of " . $movie["title"] . " movie."; ?>>
          <figcaption>
            <?= $movie["title"]; ?>
          </figcaption>
        </figure>
      </a>
    <?php endforeach; ?>
  </section>
</article>