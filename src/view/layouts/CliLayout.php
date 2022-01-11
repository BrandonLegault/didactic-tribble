<?php

class CliLayout 
{
   function output($players){
      $output = "Current Players: \n";
      foreach ($players as $player) {
         $output .= "\tName: $player->name\n" .
            "\tAge: $player->age\n" .
            "\tSalary: $player->salary\n" .
            "\tJob: $player->job\n\n";
      }
      return $output;
   }
}