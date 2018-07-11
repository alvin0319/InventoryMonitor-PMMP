<?php

/*
 *
 *  ____                           _   _  ___
 * |  _ \ _ __ ___  ___  ___ _ __ | |_| |/ (_)_ __ ___
 * | |_) | '__/ _ \/ __|/ _ \ '_ \| __| ' /| | '_ ` _ \
 * |  __/| | |  __/\__ \  __/ | | | |_| . \| | | | | | |
 * |_|   |_|  \___||___/\___|_| |_|\__|_|\_\_|_| |_| |_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author  PresentKim (debe3721@gmail.com)
 * @link    https://github.com/PresentKim
 * @license https://www.gnu.org/licenses/agpl-3.0.html AGPL-3.0.0
 *
 *   (\ /)
 *  ( . .) ♥
 *  c(")(")
 */

declare(strict_types=1);

namespace kim\present\inventorymonitor\inventory\group;

use pocketmine\item\Item;
use pocketmine\Server;

class CursorGroup extends SlotGroup{
	public const START = 52;
	public const END = 52;

	/**
	 * @param int  $index
	 * @param Item $item
	 */
	public function onUpdate(int $index, Item $item) : void{
		$player = Server::getInstance()->getPlayerExact($this->syncInventory->getPlayerName());
		if($player !== null){
			$player->getCursorInventory()->setItem(0, $item, true);
		}
	}
}