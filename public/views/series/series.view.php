<article>
  <h1>Page Series</h1>
  <p>I proposed a list of <?= count($page->list()); ?> series.</p>
  <a href="/?page=series&action=list">Show all series</a>

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
  </section>
</article>