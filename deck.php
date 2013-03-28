<?php

require_once("suit.php");
require_once("rank.php");
require_once("card.php");

class Deck {
	private $cards;

	public function __construct() {
		$rank = new ReflectionClass('Rank');		
		$suit = new ReflectionClass('suit');		

		foreach($rank->getConstants() as $key_rank => $value)
		{
			foreach($suit->getConstants() as $key_suit => $value)
			{
				$card = new Card(new Rank($key_rank), new Suit($key_suit));
				$this->cards[] = $card;
			}
		}
				
	}

	public function get_cards() {
		return $this->cards;
	}
}

?>
