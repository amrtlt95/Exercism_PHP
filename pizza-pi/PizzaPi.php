<?php

class PizzaPi
{
    const SAUCE_PER_PIZZA = 125;
    const PIZZA_SLICES = 8;
    const ADDITIONAL_PEROSON_DAUGH = 20;
    const MINIMUM_DAUGH = 200;

    public function calculateDoughRequirement($pizzaCount,$peopleCount)
    {
// `grams = pizzas * ((persons * 20) + 200)`

        return $pizzaCount * (($peopleCount*PizzaPi::ADDITIONAL_PEROSON_DAUGH)+PizzaPi::MINIMUM_DAUGH);
    }

    public function calculateSauceRequirement($pizzaCount , $canVolume)
    {
        return $pizzaCount * PizzaPi::SAUCE_PER_PIZZA / $canVolume;
    }

    public function calculateCheeseCubeCoverage($cheeseCubeSide,$cheeseThickness , $pizzaDiameter) 
    {
        // `pizzas = (cheese_dimension³) / (thickness * PI * diameter)`
        
        return floor(pow($cheeseCubeSide,3) / ($cheeseThickness * $pizzaDiameter * pi()));
    }

    public function calculateLeftOverSlices($pizzaCount , $peopleCount)
    {
        return $pizzaCount * PizzaPi::PIZZA_SLICES % $peopleCount;
    }
}
