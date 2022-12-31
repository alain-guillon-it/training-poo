<article>
  <h1>Realisators</h1>
  <p>I proposed a list of <strong><?= count($page->list()) ?></strong> realisators.</p>
  <a href="/?page=realisators&action=list">Show all realisators</a>

  <section>
    <h2>Three last realisators</h2>
    <div>
      <?php foreach ($page->getLastThreeRealisators() as $realisator) : ?>
        <a href=<?= "/?page=realisators&action=detail&id=" . $realisator["id"]; ?>>
          <figure>
            <img src=<?= $realisator["photo"]; ?> alt=<?= "The photo of " . $realisator["fullname"] . " realisator."; ?>>
            <figcaption>
              <?= $realisator["fullname"]; ?>
            </figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
</article>