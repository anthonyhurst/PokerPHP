<?php

//this is just to test demostrate capabilities.

require_once("rank.php");
require_once("suit.php");
require_once("card.php");
require_once("player.php");
require_once("dealer.php");
require_once("table.php");

$player1 = new Player("Anthony");
$player2 = new Player("Jon");
$player3 = new Player("Steve");
$player4 = new Player("Joe");

$players = array($player1, $player2, $player3, $player4);
$table = new $table($players);
$table->dealer->deal();
foreach($players as $player)
{
	echo $player . "<br/>\n";
}

?>
