<?php 

require_once('../model/Player.php');

class PlayerFormatArray extends Player {
    private $playerData;
    private $playersArray;
    
    public function __construct() {
        //We're only using this if we're storing players as an array.
        $this->setPlayersArray([]);
        //initializing default value
        $this->setPlayerData(null);
    }
    
    function readPlayers() { 
        $this->setPlayerData(include '../config/PlayerDataArray.php');
        return $this->getPlayerData();
    }
    
    function writePlayer($player) {
        return $this->pushPlayersArray($player);
    }

    /**
     * Get the value of playersArray
     */ 
    public function getPlayersArray()
    {
        return $this->playersArray;
    }

    /**
     * Set the value of playersArray
     *
     * @return  self
     */ 
    public function setPlayersArray($playersArray)
    {
        $this->playersArray = $playersArray;

        return $this;
    }

    /**
     * Push the value to playersArray
     *
     * @return  self
     */ 
    public function pushPlayersArray($playersArray)
    {
        $this->playersArray[] = $playersArray;

        return $this;
    }

    /**
     * Get the value of playerData
     */ 
    public function getPlayerData()
    {
        return $this->playerData;
    }

    /**
     * Set the value of playerData
     *
     * @return  self
     */ 
    public function setPlayerData($playerData)
    {
        $this->playerData = $playerData;

        return $this;
    }
}

?>