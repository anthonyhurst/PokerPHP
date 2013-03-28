<?php

require_once("rank.php");
require_once("suit.php");

class Card {
	private $rank;
	private $suit;

	public function __construct($rank, $suit) {
		$this->rank = $rank;
		$this->suit = $suit;
	}

	public function __toString() {
		return "$this->rank$this->suit";
	}
}
?>
