<?php

require_once("card.php");

abstract class Hand {
	protected $cards = array();
	protected $power = -1; //children override this based on hand power
	
	//Texas hold 'em rules
	const MAX_CARDS_PER_HAND = 5;
	
	public function __construct($cards) {
		$this->cards = $cards;
	}

	public function get_power() {
		return $this->power;
	}

	public function add_card($card) {
		$this->cards[] = $card;
	}

	abstract public function has_hand();
	abstract public function get_sub_power();	

	
}

class HighCard extends Hand {
	protected $power = 0;

	public function __construct($cards) {
		$this->cards = $cards;
		$this->power = 0;
	}

	public function has_hand() {
		return true; //they have to have this hand at worst..
	}

	public function get_sub_power() {
		$max = -1;
		foreach($this->cards as $card) {
			$tmp = $card->get_rank()->full_value();
			echo $tmp;
			$val = constant("Card::$tmp");
			echo $val;
			print $val;
			if($val > $max) {
				$max = $val;
			}
		}
		return $max;
	}

}

?>
