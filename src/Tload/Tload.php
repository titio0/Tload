<?php

namespace Tload;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\Player;

class Tload extends PluginBase implements Listener {

   public function onEnable() {
      $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
      if(!$this->owner->getServer()->isLevelLoaded(flat)){
        if($this->owner->getServer()->loadLevel(flat)){
          $this->getLogger ()->alert("flat맵 로드완료!");
        }
      }
   }
}
