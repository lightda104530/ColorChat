<?php

namespace ColorChat;
/*
 * ColorChat by lightda104530(TSRlightda)
 *	
 * Version: 1.0.0
 *
 */
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\utils\Config;//Maybe I will add it in the next version
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
//use FactionsPro\Main1; //刪除前面的斜線即可使用公會插件 OuOb
//use Love\love; //刪除前面的斜線即可使用結婚插件 OuOb

class ColorChat extends PluginBase implements Listener{
	
	//Enable first:D
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
			$this->getLogger()->info(TextFormat::GOLD . ">> Enabled ColorChat!! <<");
	}
	
	//Let's start the core!!
	public function onChat(PlayerChatEvent $event) {
		$event->setCancelled();
			$player = $event->getPlayer();
			/*	$mygh = Main1::getInstance()->getPlayerFaction($player->getName());
					$marry = love::getInstance()->checklove($player->getName());
						if (main::getInstance()->isVip($player->getName())){
							$myqx= TextFormat::DARK_AQUA."VIP";
							}
							if (main::getInstance()->isSvip($player->getName())){
								$myqx= TextFormat::AQUA ."SVIP";
								}
			*/
		if($player->isOp()){
			$myqx= TextFormat::GOLD ."管理员";
				}else{	
				$myqx=TextFormat::GREEN."玩家";
					}
					$asender_name = $player->getName();
						if($player->isOp()){
							$xiaoxi = TextFormat::white . $event->getMessage();
								}else{
									$xiaoxi = TextFormat::white . $event->getMessage();
									}
										$maps = $event->getPlayer()->getLevel()->getName();
									$this->getServer()->broadcastMessage(TextFormat::DARK_GREEN ."[" . $maps . "] ". TextFormat::GOLD . "[". $myqx."]"." "  .  " " . TextFormat::WHITE . "<" . $player->getName() . "> " .  $xiaoxi  );
    }
	
	//Say goodbye XD
	public function onDisable(){
		$this->getLogger()->info(TextFormat::RED . ">> Disable ColorChat!! <<");
	}
	
}