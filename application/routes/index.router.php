<?php
use models\IndexModel;
// Routes
$app->get('/', function ($request, $response, $args)  {
    //$this->logger->info("Slim-Skeleton '/' route");
    $indexModel = new \models\IndexModel();

    print_r($args);die;

    return $this->renderer->render($response, 'index.twig', $args);
});