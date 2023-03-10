<article class="article__container">
  <h1>Actors</h1>
  <p>I propose a list of <strong><?= count($page->list()); ?></strong> actors.</p>
  <a href="/?page=actors&action=list">Show all actors</a>

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
  </section>
</article>