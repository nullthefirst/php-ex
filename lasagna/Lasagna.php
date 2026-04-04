<?php

class Lasagna
{
    public function expectedCookTime()
    {
        return 40;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        // Implement the totalPreparationTime method
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
    }

    public function alarm()
    {
        // Implement the alarm method
    }
}
