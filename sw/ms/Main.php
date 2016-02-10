
<?php
/*
Made by MCUnderground
*/
namespace sw\ms;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\level\sound\PopSound;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("[MessageSounds] Enabled!");
}

public function onChat(PlayerChatEvent $event){
             $player = $event->getPlayer();
             $player->getLevel()->addSound(new PopSound($player));
    }

}
