<?php

// Routes
$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    // Render index view
    return $this->renderer->render($response, 'index.twig', $args);
});
/*
$app->get('/', function() use ($twig, $app) {
    $indexModel = new \models\IndexModel();
    $best5 = $indexModel->getBest5();
    $newGames = $indexModel->getNewGames();
    echo $twig->render('index.twig', array(
        'title' => 'Home',
        'header_title'=>$app->config('app.name'),
        'bests' => $best5,
        'newgames'=>$newGames
    ));
});*/