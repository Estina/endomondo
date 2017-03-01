<?php
require 'endomondo.php';

use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler($html);
$top = $crawler->filter('body .chart-container > .ranking > .chart-area .item')->each(function (Crawler $node, $i) {
    return [
        $node->filter('.name')->text(),
        $node->filter('.nose')->text(),
    ];
});
var_dump($top);
