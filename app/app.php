
<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();
    if (empty($_SESSION['player_choices'])) {
        $_SESSION['player_choices'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


   $app->get("/", function() use ($app) {
   return $app['twig']->render('playerinput.html.twig');
   });

   $app->post("/player_2", function() use ($app) {
       $player_1 = new RockPaperScissors($_POST["choice"]);
       $player_1->save();
       return $app['twig']->render('player_2.html.twig');
   });

   $app->post("/player_results", function() use ($app) {
    $player_2 = new RockPaperScissors($_POST["choice"]);
    $player_2->save();
    
    var_dump($_SESSION['player_choices' [0]]);

    // if($_SESSION['player_choices']->determineWinner($player_1, $player_2))
    //
    // var_dump($player_2->determineWinner($player_1_choice, $player_2_choice));
   return $app['twig']->render('player_results.html.twig');
   });


    return $app;

?>
