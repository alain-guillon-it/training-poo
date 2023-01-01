<article>
  <h1>Series Galleries</h1>
  <section>
    <div>
      <?php foreach ($page->list() as $serie) : ?>
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
  </section>
</article>