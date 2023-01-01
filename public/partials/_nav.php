<nav>
  <?php if ($_SERVER["REQUEST_URI"] == "/" || $_SERVER["REQUEST_URI"] == "/?page=home") : ?>
    <a href="/" class="active">Home</a>
  <?php else : ?>
    <a href="/">Home</a>
  <?php endif; ?>

  <?php if ($_SERVER["REQUEST_URI"] == "/?page=movies" || $_SERVER["REQUEST_URI"] == "/?page=movies&action=list" || $_SERVER["REQUEST_URI"] == "/?page=movies&action=detail") : ?>
    <a href="/?page=movies" class="active">Movies</a>
  <?php else : ?>
    <a href="/?page=movies">Movies</a>
  <?php endif; ?>

  <?php if ($_SERVER["REQUEST_URI"] == "/?page=series" || $_SERVER["REQUEST_URI"] == "/?page=series&action=list" || $_SERVER["REQUEST_URI"] == "/?page=series&action=detail") : ?>
    <a href="/?page=series" class="active">Séries</a>
  <?php else : ?>
    <a href="/?page=series">Séries</a>
  <?php endif; ?>

  <?php if ($_SERVER["REQUEST_URI"] == "/?page=actors" || $_SERVER["REQUEST_URI"] == "/?page=actors&action=list" || $_SERVER["REQUEST_URI"] == "/?page=actors&action=detail") : ?>
    <a href="/?page=actors" class="active">Actors</a>
  <?php else : ?>
    <a href="/?page=actors">Actors</a>
  <?php endif; ?>

  <?php if ($_SERVER["REQUEST_URI"] == "/?page=directors" || $_SERVER["REQUEST_URI"] == "/?page=realisators&action=list" || $_SERVER["REQUEST_URI"] == "/?page=directors&action=detail") : ?>
    <a href="/?page=directors" class="active">Directors</a>
  <?php else : ?>
    <a href="/?page=directors">Directors</a>
  <?php endif; ?>
</nav>