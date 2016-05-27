<?php
use application\models\IndexModel;

// Routes
$app->get('/', function ($request, $response, $args)  {
    //$this->logger->info("Slim-Skeleton '/' route");
    $indexModel = new IndexModel();

    print_r($args);die;

    return $this->renderer->render($response, 'index.twig', $args);
});