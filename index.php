<?php

include_once "./src/views/pageList.php";

$url = $_SERVER['REQUEST_URI'];
$pageList = array();

if (isset($_SERVER["PATH_INFO"])) {
  $currentPage = str_replace(" ", "%20", $_SERVER["PATH_INFO"]);
} else {
  $currentPage = '';
}

foreach ($pages as $page) {
    array_push($pageList, $page->getTitle());
}

switch ($url) {
  case '/cms_php/':
    require __DIR__ . '/src/views/template.php';
    break;
  case "/cms_php" . $currentPage:
    require __DIR__ . '/src/views/template.php';
    break;
  default:
    http_response_code(404);
    require __DIR__ . '/src/views/404.php';
    break;
}
