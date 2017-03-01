<?php
require 'endomondo.php';

use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler($html);
$stats = $crawler->filter('body .summaryPanel > .item > .info ')->each(function (Crawler $node, $i) {
    return [
        $node->filter('.unit')->text(),
        $node->filter('.value')->text(),
    ];
});
var_dump($stats);