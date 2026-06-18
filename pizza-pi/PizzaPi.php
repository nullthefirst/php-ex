<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas, $sauce_can_volume)
    {
        return $pizzas * 125 / $sauce_can_volume;
    }

    public function calculateCheeseCubeCoverage()
    {
        throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateLeftOverSlices()
    {
        throw new \BadFunctionCallException("Implement the function");
    }
}
