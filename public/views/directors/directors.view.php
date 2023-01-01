<article>
  <h1>directors</h1>
  <p>I propose a list of <strong><?= count($page->list()) ?></strong> directors.</p>
  <a href="/?page=directors&action=list">Show all directors</a>

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
  </section>
</article>