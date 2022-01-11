<?php 

class PlayerFormatJson extends Player {

    private $playerData;
    private $playerJsonString;
    private $players;

    public function __construct() {
        //We'll only use this one if we're storing players as a JSON string
        $this->setPlayerJsonString(null);
        $this->setPlayers([]);
        //initializing default value
        $this->setPlayerData(null);
    }

    function readPlayers() {        
        $this->setPlayerData(json_encode(include '../config/PlayerDataJson.php'));
        
        if (is_string($this->getPlayerData())) {
            $this->setPlayerData(json_decode($this->getPlayerData()));
        }
        return $this->getPlayerData();
    }

    function writePlayer($player) {
        if ($this->getPlayerJsonString()) {
            $this->setPlayers(json_decode($this->getPlayerJsonString()));
        }
        $this->setPlayers($player);
        $this->setPlayerJsonString(json_encode($player));
        return $this->getPlayerJsonString();
    }

    /**
     * Get the value of playerJsonString
     */ 
    public function getPlayerJsonString()
    {
        return $this->playerJsonString;
    }

    /**
     * Set the value of playerJsonString
     *
     * @return  self
     */ 
    public function setPlayerJsonString($playerJsonString)
    {
        $this->playerJsonString = $playerJsonString;

        return $this;
    }

    /**
     * Get the value of players
     */ 
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set the value of players
     *
     * @return  self
     */ 
    public function setPlayers($players)
    {
        $this->players = $players;

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