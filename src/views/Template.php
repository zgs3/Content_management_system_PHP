<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="src/assets/icon.png" />
  <link href="src/styles/styles.css" rel="stylesheet" type="text/css" />
  <title>CMS</title>
</head>

<body>

  <?php
  include_once "bootstrap.php";
  include_once "src/views/partials/Navigation.php";
  ?>
  <div class="container">
    <main>
      <?php
      if (isset($_SERVER["PATH_INFO"])) {
        $currentPage = ltrim($_SERVER["PATH_INFO"], "/");
      } else if ($_SERVER["REQUEST_URI"] === "/cms_php" . "/") {
        $currentPage = "Home";
      } else {
        $currentPage = '';
      }

      foreach ($pages as $page) {
        if ($page->getTitle() === $currentPage) {
          $content = $page->getContent();
          print($content);
        }
      }
      ?>
  </div>
  </main>

  <?php
  include_once "src/views/partials/Footer.php"
  ?>
</body>

</html>