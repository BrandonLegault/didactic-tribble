<?php

include __DIR__ . './NormalLayout.php';
include __DIR__ . './CliLayout.php';

function RenderLayout($isCLI)
{
   if ($isCLI) {      
         return new CliLayout();
   }else{
         return new NormalLayout();
   }

}