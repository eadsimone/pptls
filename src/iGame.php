<?php
namespace Eadesimone\PPTLS;


interface iGame
{
    public function getWinner($playera, $playerb);
    public function play();
}