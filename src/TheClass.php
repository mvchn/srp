<?php

class TheClass
{
    public function __invoke($someStuff)
    {
        //make something good with some stuff
        return sprintf("%s makes good", $someStuff);
    }
}