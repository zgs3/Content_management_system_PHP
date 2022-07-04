<?php

include_once "src/config/pageList.php";

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
  require __DIR__ . '/src/views/admin/admin.php';
} else if ($_SERVER['REQUEST_URI'] == "/cms_php/admin/edit?" . $_SERVER["QUERY_STRING"]) {
  require __DIR__ . '/src/views/admin/edit.php';
} else if ($_SERVER['REQUEST_URI'] == "/cms_php/admin?" . $_SERVER["QUERY_STRING"]) {
  require __DIR__ . '/src/views/admin/admin.php';
} else if ($_SERVER['REQUEST_URI'] == "/cms_php/admin/create") {
  require __DIR__ . '/src/views/admin/create.php';
} else {
  http_response_code(404);
  require __DIR__ . '/src/views/404.php';
}
