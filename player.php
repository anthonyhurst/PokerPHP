<?php

class Player
{
	private $cards = array();
	
	public function __construct()
	{

	}

	public function giveCard($card)
	{
		$this->cards = $card;
	}

	public function getCards()
	{
		return $this->cards;
	}

}

?>
