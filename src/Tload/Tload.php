<?php

namespace Tload;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Tload extends PluginBase implements Listener {

   public function onEnable() {
      $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
   }
   if(! $this->getServer()->getLevelManager()->getLevelByName(flat) instanceof Level)
   $this->getServer()->getLevelManager()->loadLevel(flat);
}
