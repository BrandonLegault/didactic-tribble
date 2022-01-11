<?php 
require_once('../model/IReadPlayer.php');

class ReadPlayers implements IReadPlayers {

    /**
     * @param $source instance of formatter class where we're passing value as 'new PlayerFormatArray', 'new PlayerFormatJson' or 'new PlayerFormatFile'
     * @param $filename string Only used if we're reading players in 'file' mode.
     * @return string json
     */
    function readPlayers($source, $filename = null) {           
        return $source->printPlayers();
    }

}
