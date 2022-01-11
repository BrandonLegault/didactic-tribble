<?php 

require_once('../model/IDisplayPlayer.php');
require_once('./ReadPlayers.php');
require_once('../formatters/playerFormatters/PlayerFormatArray.php');
require_once('../formatters/playerFormatters/PlayerFormatJson.php');
require_once('../formatters/playerFormatters/PlayerFormatFile.php');
require_once('../view/layouts/RenderLayout.php');

class DisplayPlayers implements IDisplayPlayers {    

    function displayPlayer($isCLI, $source) {

        $players = $source->readPlayers();
        
        if(gettype($players)=='string'){
            $players = json_decode($players);
        }

        $layout=RenderLayout($isCLI);
        echo $layout->output($players);
    }   
}