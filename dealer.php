<?php

require_once("deck.php");
require_once("player.php");

class Dealer
{
	private $deck;
	private $players;
	const CARDS_PER_PLAYER = 2; //Texas hold em rules

	public function __construct($players)
	{
		$this->players = $players;
		$this->deck = new Deck();
		$this->shuffle_deck();
	}

	public function shuffle_deck()
	{
		shuffle($this->deck);
	}

	public function deal()
	{
		for($i = 0; $i < Dealer::CARDS_PER_PLAYER; $i++)
		{
			foreach($this->players as $player)
			{
				$topCard = array_shift($this->deck);
				$player->giveCard($topCard);
			}
		}
	}
}

?>
