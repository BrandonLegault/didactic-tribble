<?php 

require_once('../model/IWritePlayer.php');

class WritePlayers implements IWritePlayers {

    /**
     * @param $source instance of formatter class where we're passing value as 'new PlayerFormatArray', 'new PlayerFormatJson' or 'new PlayerFormatFile'
     * @param $filename string Only used if we're writing in 'file' mode
     * @param $player \stdClass Class implementation of the player with name, age, job, salary.
     */
    function writePlayer($source, $player) {
        return $source->printPlayers($player);
    }    

}