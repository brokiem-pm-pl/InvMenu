<?php

declare(strict_types=1);

namespace muqsit\invmenu\type\util;

use pocketmine\math\Vector3;
use pocketmine\player\Player;

final class InvMenuTypeHelper{

	public static function getBlockOffset(Player $player) : Vector3{
		return $player->getPosition()->floor()->add(0, -1, 0);
	}
}