<div>
  <nav>
    <ul>
      <?php
      include_once "PageList.php";
      foreach ($pages as $page)
        print("<li><a href=" . str_replace(" ", "%20", $page->getTitle()) . ">" . $page->getTitle() . "</a></li>");
      ?>
    </ul>
  </nav>
</div>
