<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
$cache = 'var/cache.html';

if (file_exists($cache)) {
    $html = file_get_contents($cache);
} else {
    $client = new Client([
        'base_uri' => 'https://www.endomondo.com/',
        'timeout'  => 2.0,
    ]);

    $options = [];
    $options['headers'] = [
        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:51.0) Gecko/20100101 Firefox/51.0',
    ];
    $response = $client->request('GET', 'challenges/32029740', $options);
    $html = (string)$response->getBody();
    file_put_contents($cache, $html);
}
