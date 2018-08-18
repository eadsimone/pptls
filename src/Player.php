<?php
namespace Eadesimone\PPTLS;

/**
 *  A Player class
 *
 *  Define a  Player class.
 *
 *  @author Ezequiel De Simone <eadesimone@gmail.com>
 */
class Player
{
    /** @var string $name */
    private $name = '';

    /** @var int $qty_movement */
    private $qty_movement = 0;

    /** @var int $score */
    private $score = 0;

    /**
     * A construct for player
     *
     *  define construct for player
     *
     * @param string $name
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * A getName, return the name of player
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A move, move the count of movement
     *
     * @return void
     */
    public function move() {
        $this->qty_movement+=1 ;
    }

    /**
     * A setScore,
     *
     * The function increment the score by one
     *
     * @return void
     */
    public function setScore()
    {
        $this->score+=1 ;
    }

    /**
     * A getScore,
     *
     * @return int score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * A shoot
     *
     *  return a ramdom number between 0 and 5
     *
     * @return int
     */
    public function shoot() {
        return rand(0, 4);
    }
}