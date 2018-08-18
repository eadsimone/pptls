<?php
namespace Eadesimone\PPTLS;

/**
 *  A Pptls class
 *
 *  Define a piedra papel tijera lagarto spock class.
 *
 *  @author Ezequiel De Simone <eadesimone@gmail.com>
 */
class Pptls implements iGame
{
    /** @var cards[] An array of cards. */
    private $cards = [ "Piedra","Papel","Tijera","Lagarto", "Spock"];

    /** @var players[] An array of cards. */
    private $players = [];

    /**
     * @var int $round
     */
    private $round = 0;

    /**
     * @var int $winner
     */
    private $winner;

    public function __construct($rounds,$players)
    {
        $this->round = $rounds;
        foreach ($players as $key => $player ) {
            array_push($this->players, $player);
        }
    }

    /**
     * A getWinRound
     *
     * @return int
     */
    private function getWinRound($lance1, $lance2) {
        //  "Rock" => (Lizard Scissors),
        //  "Paper" => (Rock, Spock),
        //  "Scissors" => (Lizard Paper),
        //  "Lizard" => (Paper Spock),
        //  "Spock" => (Scissors Rock)
        echo "player one: ".$lance1."\n";
        echo "player two: ".$lance2."\n";

        if ($lance1 === $lance2){
            return -1;
        } else if(
            (($lance1 === "Piedra") && ( ($lance2 === "Lagarto")  || ($lance2 === "Tijera") )) ||
            (($lance1 === "Papel") && ( ($lance2 === "Piedra")  || ($lance2 === "Spock") )) ||
            (($lance1 === "Lagarto") && ( ($lance2 === "Papel")  || ($lance2 === "Spock") )) ||
            (($lance1 === "Spock") && ( ($lance2 === "Tijera")  || ($lance2 === "Piedra") ))
        ){
            return 0;
        }
        else {
            return 1;
        }
    }

    /**
     * A getWinner
     *
     * @return void
     */
    public function getWinner($pa,$pb)
    {
        if ($pa->getScore() == $pb->getScore()){
            echo "not winner, Tie \n";
        }if ($pa->getScore() > $pb->getScore()){
            echo "The winner is".$pa->getName().'\n';
        } else {
            echo "The winner is".$pb->getName().'\n';
        }
    }

    /**
     * A play
     *
     * init the game
     *
     * @return void
     */
    public function play()
    {
        $i=0;
        for ($i; $i < $this->round; $i++){
            $result = $this->getWinRound($this->cards[$this->players[0]->shoot()], $this->cards[ $this->players[1]->shoot()]);
            if ($result == -1 ){
                $this->players[0]->setScore();
                $this->players[1]->setScore();
            } else {
                $this->players[$result]->setScore();
            }
        }
        $this->getWinner($this->players[0],$this->players[1]);
    }
}