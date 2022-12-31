<article>
  <h1>Actors</h1>
  <p>I proposed a list of <strong><?= count($page->list()); ?></strong> actors.</p>
  <a href="/?page=actors&action=list">Show the complete list</a>

  <section>
    <h2>The three last actors</h2>
    <div>
      <?php dump($page->getLastThreeActors()); ?>
    </div>
  </section>
</article>