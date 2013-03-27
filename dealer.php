<?php

require_once("deck.php");
require_once("player.php");

class Dealer
{
	private $deck;
	private $players;
	public $table;
	//Texas hold 'em rules
	const CARDS_PER_PLAYER = 2; 
	const CARDS_FLOP = 3; 
	const CARDS_TURN = 1; 
	const CARDS_RIVER = 1; 

	public function __construct($players, $table)
	{
		$this->players = $players;
		$this->table = $table;
		$deck = new Deck();
		$this->deck = $deck->get_cards();
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

	public function get_deck()
	{
		return $this->deck;
	}

	public function flop()
	{
		$this->give_table_card(Dealer::CARDS_FLOP);
	}

	public function turn()
	{
		$this->give_table_card(Dealer::CARDS_TURN);
	}

	public function river()
	{
		$this->give_table_card(Dealer::CARDS_RIVER);
	}

	public function give_table_card($n)
	{
		for($i = 0; $i < $n; $i++)
		{
			$topCard = array_shift($this->deck);
			$this->table->give_card($topCard);
		}	
	} 

}

?>
