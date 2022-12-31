<article>
  <h1>Movies</h1>
  <p>I proposed a list of <strong><?= count($page->list()); ?></strong> movies.</p>
  <a href="/?page=movies&action=list">Show the complete list</a>

  <section>
    <h2>The three last movies</h2>
    <div>
      <?php dump($page->getLastThreeMovies()); ?>
    </div>
  </section>
</article>