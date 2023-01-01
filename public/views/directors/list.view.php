<article>
  <h1>Directors Galleries</h1>
  <section>
    <div>
      <?php foreach ($page->list() as $director) : ?>
        <a href=<?= "/?page=directors&action=detail&id=" . $director["id"]; ?>>
          <figure>
            <img src=<?= $director["photo"]; ?> alt=<?= "The cover of " . $director["fullname"] . " movie."; ?>>
            <figcaption>
              <?= $director["fullname"]; ?>
            </figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
</article>