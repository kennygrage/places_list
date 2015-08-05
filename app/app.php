<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/places.php";

    session_start();
    if(empty($_SESSION['list_of_places'])) {
        Places::deleteAll();
    }

    $app = new Silex\Application();

    //Provide integration with the Twig templete engine
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //root path
    $app->get("/", function() use ($app) {
        return $app['twig']->render('tasks.html.twig', array('tasks' => Task::getAll()));
    });

    $app->post("/tasks", function() use ($app) {
        $task = new Task()
        //
        //not finished yet
        //
        
    });

?>
