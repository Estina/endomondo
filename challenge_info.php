<?php
require 'endomondo.php';

use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler($html);
$info['title'] = $crawler->filter('body .navigationHeading')->text();
$info['start'] = $crawler->filter('body .details-container .duration .start > span')->eq(1)->text();
$info['end'] = $crawler->filter('body .details-container .duration .end > span')->eq(1)->text();

var_dump($info);