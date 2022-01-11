<?php

class NormalLayout{
   function output($players){
    $players_html = "";
    foreach ($players as $player) {
       $players_html .= <<<HTML
       <li>
          <div>
             <span class="player-name">Name: $player->name</span>
             <span class="player-age">Age: $player->age</span>
             <span class="player-salary">Salary: $player->salary</span>
             <span class="player-job">Job: $player->job</span>
          </div>
       </li>
       HTML;
    }

    $final_html = <<<HTML
    <!DOCTYPE html>
    <html>
    <head>
       <style>
          li {
             list-style-type: none;
             margin-bottom: 1em;
          }
          span {
             display: block;
          }
       </style>
    </head>
    <body>
    <div>
       <span class="title">Current Players</span>
       <ul>
          $players_html
       </ul>
    </body>
    </html>
    HTML;

    return $final_html;
   }

}