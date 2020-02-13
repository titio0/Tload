<?php

namespace Tload;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\Player;

class Tload extends PluginBase implements Listener {

   public function onEnable() {
      $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
      if(!$this->getServer()->getLevelManager()->getLevelByName("flat") instanceof Level):bool {
          $this->getServer()->getLevelManager()->loadLevel("flat");
          $this->getLogger ()->alert("flat맵 로드완료!");
      }
   }
}
