<?php

abstract class Hand {
	private $cards = array();
	private $power = -1; //children override this based on hand power
	
	//Texas hold 'em rules
	const MAX_CARDS_PER_HAND = 5;
	
	public function __construct($cards) {
		$this->cards = $cards;
	}

	public function add_card($card) {
		$this->cards[] = $card;
	}

	public function get_power() {
		return $this->power;
	}

	abstract public function has_hand();
	abstract public function sub_power();	

	
}

class HighCard extends Hand {
	$power = 0;
	public function has_hand() {
		return true; //they have to have this hand at worst..
	}

	public function sub_power() {
		$max = -1;
		foreach($this->cards as $card) {
			$val = Card::$card->rank;
			if($val > $max) {
				$max = $val;
			}
		}
		return $max;
	}

}

?>
