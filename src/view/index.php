<?php

require_once('../controller/DisplayPlayers.php');
require_once('../formatters/playerFormatters/PlayerFormatArray.php');
require_once('../formatters/playerFormatters/PlayerFormatJson.php');
require_once('../formatters/playerFormatters/PlayerFormatFile.php');


$playersObject = new DisplayPlayers();
$isCLI = php_sapi_name() === 'cli';

$playersObject->displayPlayer($isCLI, new PlayerFormatArray());
// $playersObject->displayPlayer($isCLI, new PlayerFormatJson());
// $playersObject->displayPlayer($isCLI, new PlayerFormatFile('../config/PlayerDataFile.json'));

?>

