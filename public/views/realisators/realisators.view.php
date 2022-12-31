<article>
  <h1>Page Realisators</h1>
  <p>I proposed a list of <?= count($page->list()) ?> realisators.</p>
  <a href="/?page=realisators&action=list">Show all realisators</a>

  <section>
    <h2>The three last realisators</h2>
    <div>
      <?php dump($page->getLastThreeRealisators()); ?>
    </div>
  </section>
</article>