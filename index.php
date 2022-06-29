<?php

include_once "./src/views/pageList.php";

$url = $_SERVER['REQUEST_URI'];
$pageList = array();

foreach ($pages as $page) {
  array_push($pageList, str_replace(" ", "%20", $page->getTitle()));
}

if (isset($_SERVER["PATH_INFO"])) {
  $currentPage = str_replace(" ", "%20", $_SERVER["PATH_INFO"]);
} else {
  $currentPage = '';
}

if ($_SERVER['REQUEST_URI'] === "/cms_php" . "/") {
  require __DIR__ . '/src/views/template.php';
} else if (in_array(ltrim($currentPage, "/"), $pageList)) {
  require __DIR__ . '/src/views/template.php';
} else if ($_SERVER['REQUEST_URI'] == "/cms_php/admin") {
  require __DIR__ . '/src/admin/admin.php';
} else {
  http_response_code(404);
  require __DIR__ . '/src/views/404.php';
}
