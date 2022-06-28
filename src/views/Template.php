<?php

include_once "bootstrap.php";
include_once "Navigation.php";

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


