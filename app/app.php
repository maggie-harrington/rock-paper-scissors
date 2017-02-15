
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
    RockPaperScissors::clear();
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

    $winner = RockPaperScissors::determineWinner($_SESSION['player_choices'][0], $_SESSION['player_choices'][1]);

   return $app['twig']->render('player_results.html.twig', array('winner' => $winner));
   });

    return $app;

?>
