<article class="home__container">
  <h1>OOP Project</h1>
  <p>Welcome to this website. It's writing with php and i used the oop concept.</p>

  <section>
    <h2>Three last movies</h2>
    <div>
      <?php dump($page->getLastThreeMovies()); ?>
    </div>
  </section>

  <section>
    <h2>Three last series</h2>
    <div>
      <?php dump($page->getLastThreeSeries()); ?>
    </div>
  </section>

  <section>
    <h2>Three last actors</h2>
    <div>
      <?php dump($page->getLastThreeActors()); ?>
    </div>
  </section>

  <section>
    <h2>Three last realisators</h2>
    <div>
      <?php dump($page->getLastThreeRealisators()); ?>
    </div>
  </section>

</article>