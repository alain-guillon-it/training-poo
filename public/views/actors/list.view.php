<article>
  <h1>Actors Galleries</h1>
  <section>
    <div>
      <?php foreach ($page->list() as $actor) : ?>
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
  </section>
</article>