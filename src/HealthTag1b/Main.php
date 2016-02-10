<?php

namespace HealthTag1b;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\sound\LaunchSound;
use pocketmine\math\Vector3;
use pocketmine\utils\TextFormat as Color;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerMoveEvent;

class Main extends PluginBase implements Listener{

	public function onEnable(){
        	$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getServer()->getScheduler()->scheduleRepeatingTask(new Health($this), 10);
	}

public function Popup(){

      foreach($this->getServer()->getPlayer () as $player){
            $player->setNameTag("§e".$player->getName()."\n§l§2    ".$player->getHealth()."§c/§2".$player->getMaxHealth());

}
}
class Health extends PluginTask
{
    public function __construct(Plugin $owner) {
        parent::__construct($owner);
    }
    public function onRun($currentTick){
        $this->getOwner()->Popup();
    }
     
}
