<?php
/*
Tomato juice - 1 cup
Vegetable oil - 2 tablespoons
Chicken egg - 1 piece
Wheat flour / Flour - 3 tablespoons
Rice (boiled) - 150 grams
Onion - 3 pieces
Squid (peeled) - 600 grams
Salt (to taste)
Black pepper (ground, to taste)

Cooking time: 25 minutes
Servings: 8
*/
function cookSquidMeatballs (
    int $Tomato_juice, 
    int $Vegetable_oil, 
    int $egg, 
    int $Flour, 
    int $Rice, 
    int $Onion, 
    int $Squid)
    {
        echo 
        "1. $Squid grams of squid and $Onion onions need to be peeled and cut not very finely.
         2. And pass through a meat grinder.
         3. Add $Rice grams of boiled rice, $egg egg, salt and pepper. Mix well.
         4. Shape the minced meat into balls and bread them in $Flour tablespoons of flour. Fry in $Vegetable_oil tablespoons vegetable oil on all sides until golden brown.
         5. Then pour $Tomato_juice glass of tomato juice and simmer for 10-15 minutes.
         Garnish with mashed potatoes... and an unusual delicious dinner is ready! Bon Appetit!";
    }
cookSquidMeatballs(1, 2, 1, 3, 150, 3, 600);
?>