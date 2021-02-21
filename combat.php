<?php

interface Combatant
{
	public function getStrength();
	public function getAgility();
}

class Player implements Combatant
{
	private $strength = null;
	private $agility = null;

	public function __construct($strength, $agility)
	{
		$this->setStrength($strength);
		$this->setAgility($agility);
	}

	public function setStrength($strength)
	{
		$this->strength = $strength;
	}

	private function setAgility($agility)
	{
		$this->agility = $agility;
	}

	public function getStrength()
	{
		return $this->strength;
	}

	public function getAgility()
	{
		return $this->agility;
	}
}

class Fatty extends Player
{
	public function __construct()
	{
		parent::__construct(50, 20);
	}
}

class Ninja extends Player
{
	public function __construct()
	{
		parent::__construct(20, 50);
	}
}

class Match
{
	private $playerone = null;
	private $playertwo = null;

	public function setPlayerOne(Player $player)
	{
		$this->playerone = $player;
	}

	public function setPlayerTwo(Player $player)
	{
		$this->playertwo = $player;
	}

	public function getPlayerOne()
	{
		return $this->playerone;
	}

	public function getPlayerTwo()
	{
		return $this->playertwo;
	}
}

class Combat
{
	private $match;

	public function setMatch(Match $match)
	{
		$this->match = $match;

		return $this;
	}

	private function getMatch()
	{
		return $this->match;
	}

	public function fight()
	{
		// strength = health, power
		// agility = first, how often

		$p1 = $this->getMatch()->getPlayerOne();
		$p2 = $this->getMatch()->getPlayerTwo();

		while(($p1->getStrength() > 0) && ($p2->getStrength() > 0))
		{
			$p1attack = mt_rand(0, $p1->getAgility());
			$p2attack = mt_rand(0, $p2->getAgility());

			switch(true)
			{
				case $p1attack > $p2attack:
				$damage = max(1, $p1->getStrength() * 0.1);
				$p2->setStrength($p2->getStrength()-$damage);
				echo sprintf("%s hits %s for %d damage (%d health left.)\n", get_class($p1), get_class($p2), $damage, $p2->getStrength());
				break;
				case $p2attack > $p1attack:
				$damage = max(1, $p2->getStrength() * 0.1);
				$p1->setStrength($p1->getStrength()-$damage);
				echo sprintf("%s hits %s for %d damage (%d health left.)\n", get_class($p2), get_class($p1), $damage, $p1->getStrength());
				break;
			}

			$this->determineWinner();
		}
	}

	private function determineWinner()
	{
		$p1 = $this->getMatch()->getPlayerOne();
		$p2 = $this->getMatch()->getPlayerTwo();

		if($p1->getStrength() <= 0)
		{
			echo sprintf("\nPlayer 1 the %s wins!", get_class($p1));
			die;
		} elseif($p2->getStrength() <= 0)
		{
			echo sprintf("\nPlayer 2 the %s wins!", get_class($p2));
			die;
		}
	}
}

$match = new Match();
$match->setPlayerOne(new Fatty());
$match->setPlayerTwo(new Ninja());

(new Combat())->setMatch($match)->fight();





?>
