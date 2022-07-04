<header class="mainHeader">
  <nav>
    <ul class="flex">
      <?php
      foreach ($pages as $page)
        if (ltrim($currentPage, "/") == str_replace(' ', '%20', $page->getTitle())) {
          print("<li><a href='" . str_replace(' ', '%20', $page->getTitle())
            . "' class='mainLink active'>" . $page->getTitle() . "</a></li>");
        } else {
          print("<li><a href='" . str_replace(' ', '%20', $page->getTitle())
            . "' class='mainLink'>" . $page->getTitle() . "</a></li>");
        }
      ?>
    </ul>
  </nav>
</header>