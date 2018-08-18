<?php
use Eadesimone\PPTLS\Player;
/**
 *  Corresponding Class to test Player class
 *
 *  For each class in your library, there should be a corresponding Unit-Test for it
 *  Unit-Tests should be as much as possible independent from other test going on.
 *
 *  @author Ezequiel De Simone <eadesimone@gmail.com>
 */

class PlayerTest extends PHPUnit_Framework_TestCase {

    /**
     * Just check if the Player has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError(){
        $var = new Player("Juan");
        $this->assertTrue(is_object($var));
        unset($var);
    }

    /**
     * Check initial score is correct
     *
     */
    public function testInitialScore(){
        $player = new Player('Test');
        $score =$player->getScore();

        $this->assertTrue($score === 0);

        unset($player);
    }

    /**
     * Check initial score is correct
     *
     */
    public function testSetScore(){
        $player = new Player('Test');
        $player->setScore();
        $score =$player->getScore();

        $this->assertTrue($score === 1);

        unset($player);
    }

}