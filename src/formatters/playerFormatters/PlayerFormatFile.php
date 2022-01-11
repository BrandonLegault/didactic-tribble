<?php 

require_once('../model/Player.php');

class PlayerFormatFile extends Player {

    private $playerData;
    private $filename;
    private $players;

    function __construct($filename) {
        //initializing default value
        $this->setPlayerData(null);
        
        if(file_get_contents($filename))            
        $this->setFilename(file_get_contents($filename));
        else            
        $this->setFilename([]);
                
       $this->setPlayers(json_decode($this->getFilename()));
        if (!$this->getPlayers()) {
            $this->setPlayers([]);
        }
    }
    
    function readPlayers() {        
        return $this->getFilename();
    }

    function writePlayers($player){
      
        $this->setPlayers($player);
        file_put_contents($this->getFilename(), json_encode($this->getPlayers()));
    }

    /**
     * Get the value of filename
     */ 
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set the value of filename
     *
     * @return  self
     */ 
    public function setFilename($filename)
    {
        $this->filename = $filename;

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
        $this->players[] = $players;

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