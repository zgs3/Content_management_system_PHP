<header class="mainHeader">
  <nav>
    <ul class="flex">
      <?php
      foreach ($pages as $page)
        print("<li><a href='" . str_replace(' ', '%20', $page->getTitle())
          . "' class='mainLink'>" . $page->getTitle() . "</a></li>");
      ?>
    </ul>
  </nav>
</header>