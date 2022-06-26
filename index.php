<?php

include_once "bootstrap.php";


print("Display all pages: " . "<br>");
$pagesRepository = $entityManager->getRepository('Models\Pages');
$pages = $pagesRepository->findAll();

print("<table>");
foreach($pages as $page)
    print("<tr>" 
            . "<td>" . "ID: " . $page->getId()  . ". " . "</td>" 
            . "<td>" . $page->getTitle() . "</td>" 
            . "<td>" . $page->getContent() . "</td>" 
        . "</tr>");
print("</table>");
