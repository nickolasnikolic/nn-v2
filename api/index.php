<?php
require 'vendor/autoload.php';

error_reporting(-1);//tell me stuff

$app = new \Slim\Slim();

$app->get('/spidey', function(){

  // Initiate crawl
  $crawler = new \Arachnid\Crawler('http://extremetech.com', 2);
  $crawler->traverse();

  // Get link data
  $links = $crawler->getLinks();

  echo json_encode($links);

});

$app->run();
