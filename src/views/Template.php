<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/styles/styles.css" rel="stylesheet" type="text/css" />
  <title>CMS</title>
</head>

<body>

  <?php
  include_once "bootstrap.php";
  include "Navigation.php";
  ?>
  <main>
    <div class="container">

      <?php
      if (isset($_SERVER["PATH_INFO"])) {
        $currentPage = ltrim($_SERVER["PATH_INFO"], "/");
      } else {
        $currentPage = '';
      }

      foreach ($pages as $page) {
        if ($page->getTitle() === $currentPage) {
          $content = $page->getContent();
          print(htmlentities($content));
          print("<br>---<br>");
          print(html_entity_decode($content));
        }
      }
      ?>

    </div>
  </main>

  <?php
  include_once "Footer.php"
  ?>
</body>

</html>