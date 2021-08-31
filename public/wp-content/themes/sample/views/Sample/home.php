hello world<br>

<?php

use Shabadabada\Api;
use Shabadabada\Deezer;
    use Shabadabada\Models\Music;
    use Shabadabada\Models\CoreModel;
    use Shabadabada\Models\Game;

set_time_limit(0);
    //phpinfo();
    //exit();
    // 
    // die('ici');
    // Deezer import test
    $deezerTest = new Deezer();
    //$deezerTest->import();
    //$deezerTest->insertBoWp('https://api.deezer.com/search?q=artist:"eminem"', 'rap');

    $musicTest = new Music(); //ok
    $chansonFrancaise = $musicTest->get_musics_from_category(['chanson-francaise']);

    $testApi = new Api();
    $testRoute = $testApi->createGame();

    
       //print_r($termsPost);
        //echo $termsPost['name'];//
    


        
    
    $game = new Game();
    
    $gameTest = $game->createTable();

    ?>