<?php

namespace Tload;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level;
use pocketmine\event\LevelLoadEvent;

class Tload extends PluginBase implements Listener {

   public function onEnable() {
      $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
  }    

  public function LevelLoadEvent(string $name) : bool{
    $name = "flat"
    $this->getServer()->loadLevel($name);
  }  
}
