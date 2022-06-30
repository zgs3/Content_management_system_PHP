<?php
include_once "bootstrap.php";

$pagesRepository = $entityManager->getRepository('Models\Pages');
$pages = $pagesRepository->findAll();
