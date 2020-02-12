<?php

namespace Tload;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Tload extends PluginBase implements Listener {

   public function onEnable() {
      $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
  }    

  public function loadLevel(string $name) : bool{
    $this->getServer()->loadLevel (flat);
  }  
}
