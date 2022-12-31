<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $page->getTitle(); ?>
  </title>
  <!-- INCLUDE BASE CSS -->
  <link rel="stylesheet" href="../../public/assets/css/base.css">
  <!-- INCLUDE HEADER CSS -->
  <link rel="stylesheet" href="../../public/assets/css/nav.css">
  <!-- INCLUDE MAIN CSS -->
  <link rel="stylesheet" href="../../public/assets/css/main.css">
  <!-- INCLUDE FOOTER CSS -->
  <link rel="stylesheet" href="../../public/assets/css/footer.css">
</head>

<body>
  <header>
    <span>Training POO</span>
    <?php include_once __DIR__ . "/_nav.php"; ?>
  </header>
  <main>