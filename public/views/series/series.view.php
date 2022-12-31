<article>
  <h1>Page Series</h1>
  <p>I proposed a list of <?= count($page->list()); ?> series.</p>
  <a href="/?page=series&action=list">Show all series</a>

  <section>
    <h2>The three last series</h2>
    <div>
      <?php dump($page->getLastThreeSeries()); ?>
    </div>
  </section>
</article>